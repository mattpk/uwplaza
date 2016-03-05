$(document).ready(function() {
	//$.getScript("requests.js", function*() {
	//	console.log("main loaded, require requests");
	//});
	console.log("document ready");

	var getList = function () {
		$.post("ajaxReq.php", {req: "restaurants"}).done(function(data) {
			var itemList = JSON.parse(data);
			console.log("response succeed");
			console.log(itemList);
			var list = document.getElementById("submit-drop");
			itemList.forEach(function(item) {
				console.log(item);
				var itemEl = document.createElement("li");
				itemEl.innerHTML = item;
				list.appendChild(itemEl);
			});
		});
	}
	getList();

});