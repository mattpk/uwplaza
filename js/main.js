$(document).ready(function() {
	//$.getScript("requests.js", function*() {
	//	console.log("main loaded, require requests");
	//});

	//populates list item
	var itemList = getList();
	var list = document.getElementById("submit-drop");
	itemList.forEach(function(item) {
		var itemEl = document.createElement("li");
		itemEl.innerHTML = item;
		list.appendChild(itemEl);
	});

});