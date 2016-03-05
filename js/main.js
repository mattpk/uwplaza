$.getScript("requests.js");
console.log("main loaded, require requests");

$(document).ready(function() {
	//populates list item
	var itemList = req.getList();
	var list = document.getElementById("submit-drop");
	itemList.forEach(function(item) {
		var itemEl = document.createElement("li");
		itemEl.innerHTML = item;
		list.appendChild(itemEl);
	});

});