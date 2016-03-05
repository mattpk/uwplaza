$(document).ready(function() {
	//$.getScript("requests.js", function*() {
	//	console.log("main loaded, require requests");
	//});
	
	$.post("ajaxReq.php", {req: "restaurants"}).done(function(data) {

		var itemList = JSON.parse(data);
		itemList.sort();
		var list = document.getElementById("submit-drop");
		itemList.forEach(function(item) {
			var atag = document.createElement("a");
			var litag = document.createElement("li");
			atag.innerHTML = item;
			atag.setAttribute("href", "#");
			litag.appendChild(atag);
			list.appendChild(litag);
		});
	});

	var submitButton = document.getElementById("submit-button");
	var clearButton = document.getElementById("clear-button");
	var dishField = document.getElementById("dish-field");
	var questField = document.getElementById("questid-field");
	var ratingField = document.getElementById("rating-field");
	var reviewField = document.getElementById("review-field");
	var restaurantName = "";

	$( document.body ).on( 'click', '.dropdown-menu li', function( event ) {
						 
		var $target = $( event.currentTarget );
						 
		$target.closest( '.btn-group' )
			.find( '[data-bind="label"]' ).text( $target.text() )
					.end()
						.children( '.dropdown-toggle' ).dropdown( 'toggle' );

		restaurantName = $target.text();
		return false;
						 
	});

	submitButton.addEventListener("click", function(event) {
		event.preventDefault();
		console.log("submit clicked");

		var dishName = $("#dish-field").val().trim();
		var questName = $("#questid-field").val().trim();
		var ratingT = $("#rating-field").val().trim();
		var reviewT = $("#review-field").val().trim();
		
		console.log(restaurantName + " " + dishName + " " + questName + " " + ratingT + " " + reviewT);
		$.post("ajaxReq.php", {req: "add", user: questName, restaurant: restaurantName, dish: dishName, rating: ratingT, review: reviewT}).done(function(data) {
			//location.reload();
		});
	});

	// draw main table stuff
	$.post("ajaxReq.php", {req: "global"}).done(function(data) {
		//console.log(data);
		var input = JSON.parse(data);
		input.sort(function(x,y){
			return x.restaurant.localeCompare(y.restaurant);
		});
		var people=[];
		var rest=[];
		var l=input.length;
		for (var x=0;x<l;x++){
			if (people.indexOf(input[x].user)==-1){
				people[people.length]=input[x].user;
			}
			if (rest.indexOf(input[x].restaurant)==-1){
				rest[rest.length]=input[x].restaurant;
			}
		}

		var best = new Array(rest.length);
		for (var x =0; x< best.length; x++) {
			best[x] = 0;
		}


		var vals = new Array(people.length);
		for (var i = 0; i < people.length; i++) {
		  vals[i] = new Array(rest.length);
		}

		for (var i = 0; i < people.length; i++) {
		  	for (var n = 0; n < rest.length; n++) {
		    	vals[i][n] = 0;
		  }
		}


		
		for (var x=0; x<input.length; x++){
			var p = people.indexOf(input[x].user); 
			var r = rest.indexOf(input[x].restaurant);
			vals[p][r]++;
		}

				//sort function
		
		var newArray = people.slice();
	    people.sort(compareFN);
		
		// now do this best
		for (var i = 0; i < rest.length; i++) {
			var bestSum = 0;
			for (var j = 0; j < people.length; j++) {
				bestSum = Math.max(bestSum, vals[j][i]);
			}
			best[i] = bestSum;
		}

		//comperator function
		function compareFN(x, y) {
			var iX=newArray.indexOf(x);
			var iY=newArray.indexOf(y);
			var sumX=0;
			var sumY=0;
			for (var x=0;x<rest.length;x++){
				sumX+=vals[iX][x];
				sumY+=vals[iY][x];
			}
		    return sumY-sumX;
		}

		vals.sort(function(x, y) {
			var sumX = 0;
			var sumY = 0;
			for (var i = 0; i < x.length; i++) {
				sumX += x[i];
				sumY += y[i];
			}
			return sumY-sumX;
		});




		var benson = "";
		for (var i = 0; i < people.length; i++) {
		  	for (var n = 0; n < rest.length; n++) {
		    	benson += vals[i][n] + " ";
		  }
		  benson += '\n';
		}
		console.log(benson);
		var alpha = "ABCDEFGHIJKLMNOPQRSTUWVXYZ";
		for (var x = -1; x < people.length; x++) {
			var columns = "";

			for (var y = -1; y < rest.length; y++) {
				if (x == -1 && y == -1) {
					columns += '<th>Name</th>';
				} else if (x == -1) {
					columns += '<th>' + rest[y] + " " + alpha.substring(y,y+1) + " " + best[y] + '</th>';
				} else if (y == -1) {
					columns += '<td>' + people[x] + '</td>';
				} else {
					var color = '#f5f5ef';
					if (best[y] != 0) {
						if (vals[x][y] / best[y] >= 0.90)
							color = '#267326';
						else if (vals[x][y] / best[y] >= 0.75)
							color = '#39ac39';
						else if (vals[x][y] / best[y]  >= 0.50)
							color = '#53c653';
						else if (vals[x][y] / best[y] >= 0.25)
							color = '#bbbb77';
						else if (vals[x][y] / best[y] > 0)
							color = '#d6d6ad';

					}
					columns += '<td bgcolor="'+ color +'">' + vals[x][y] + '</td>';
				}
			}
			$(".table-bordered").append('<tr>' + columns + '</tr>');
		}

	});

});