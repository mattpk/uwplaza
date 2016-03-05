$(document).ready(function() {
	//$.getScript("requests.js", function*() {
	//	console.log("main loaded, require requests");
	//});
	
	$.post("ajaxReq.php", {req: "restaurants"}).done(function(data) {

		var itemList = JSON.parse(data);
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
			location.reload();
		});
	});

	// draw main table stuff
	$.post("ajaxReq.php", {req: "global"}).done(function(data) {
		console.log(data);
		var input = JSON.parse(data);
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
		  	for (var n = 0; n < rest.length; n++) {
		    	vals[i][n] = 0;
		  }
		}


		for (var i = 0; i < people.length; i++) {
		  vals[i] = new Array(rest.length);
		}
		for (var x=0; x<input.length; x++){
			var p = people.indexOf(input[x].user); 
			var r = rest.indexOf(input[x].restaurant);
			vals[p][r]++;
			best[r] = Math.max(best[r], vals[p][r]);
		}
		var benson = "";
		for (var i = 0; i < people.length; i++) {
		  	for (var n = 0; n < rest.length; n++) {
		    	benson += vals[i][n] + " ";
		  }
		  benson += '\n';
		}
		console.log(benson);


	});

});