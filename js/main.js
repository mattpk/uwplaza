$(document).ready(function() {
	//$.getScript("requests.js", function*() {
	//	console.log("main loaded, require requests");
	//});
	
	$.post("ajaxReq.php", {req: "restaurants"}).done(function(data) {

		var itemList = JSON.parse(data);
		var list = document.getElementById("submit-drop");
		itemList.forEach(function(item) {
			console.log(item);
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
		
		//console.log(restaurantName + " " + dishName + " " + questName + " " + ratingT + " " + reviewT);
		$.post("ajaxReq.php", {req: "add", user: quest, restaurant: restaurantName, dish: dishName, rating: ratingT, review: reviewT});
	});

	// draw main table stuff
	/*$.post("ajaxReq.php", {req: "global"}).done(function(data) {
		console.log(data);
		var get = JSON.parse(data);
		console.log(get);
	});*/
});