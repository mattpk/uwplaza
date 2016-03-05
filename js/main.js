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

	// draw main table stuff
	/*$.post("ajaxReq.php", {req: "global"}).done(function(data) {
		console.log(data);
		var get = JSON.parse(data);
		console.log(get);
	});*/
});