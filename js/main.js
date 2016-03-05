$(document).ready(function() {
	//$.getScript("requests.js", function*() {
	//	console.log("main loaded, require requests");
	//});

	//populates list item
	var itemList = getList();
	console.log(itemList);
	var list = document.getElementById("submit-drop");
	Array.prototype.forEach.call(itemList, function(item) {
		var itemEl = document.createElement("li");
		itemEl.innerHTML = item;
		list.appendChild(itemEl);
	});

});