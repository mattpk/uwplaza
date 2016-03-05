$(document).ready(function() {
	//$.getScript("requests.js", function*() {
	//	console.log("main loaded, require requests");
	//});
	
	$.post("ajaxReq.php", {req: "restaurants"}).done(function(data) {

		var itemList = JSON.parse(data);
		var list = document.getElementById("submit-drop");
		itemList.forEach(function(item) {
			console.log(item);
			var itemEl = document.createElement("option");
			itemEl.setAttribute("value", item.toLowerCase());
			itemEl.innerHTML = item;
			list.appendChild(itemEl);
		});
	});

	// draw main table stuff
	$.post("ajaxReq.php", {req: "global"}).done(function(data) {
		console.log(data);
		var get = JSON.parse(data);
		console.log(get);
	});
});