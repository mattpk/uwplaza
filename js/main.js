$(document).ready(function() {
	//$.getScript("requests.js", function*() {
	//	console.log("main loaded, require requests");
	//});
	console.log("document ready");


	var getList = function () {
		$.post("ajaxReq.php", {req: "restaurants"}).done(function(data) {

			var itemList = JSON.parse(data);
			console.log(itemList);
			var list = document.getElementById("submit-drop");
			Array.prototype.forEach.call(itemList, function(item) {
				var itemEl = document.createElement("li");
				itemEl.innerHTML = item;
				list.appendChild(itemEl);
			});
		});
	}

});