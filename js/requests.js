function reqRestaurant(name) {
	$.post("ajaxReq.php", {name: name}, function(data) {
		return JSON.parse(data);
	});
}

console.log("loaded");

var test = {
	"map": [{"name": "John", "eaten": [1, 1, 1]}, 
			{"name": "Bob", "eaten": [1, 0, 1]}, 
			{"name": "Jane", "eaten": [0, 0, 0]}],
	"items": ["cumin lamb", "sesame chicken", "sweet sour pork"]
}

localStorage.name = "John";

// data => from reqResaurant, uses local storage
function drawTable (data) {
	console.log("drawtable");
	 var table = document.createElement("table");
	 table.className = "table table-bordered";
	 var headers = data.items;
	 var map = data.map;
	 var person;
	 var pindex = -1;
	 var personName = localStorage.name;


	 for(var i = 0; i < map.length; ++i) {
	 	if(personName === map[i].name) {
	 		person = map[i];
	 		pindex = i;
	 	}
	 }


	 // printing headers
	 var row = document.createElement("tr");

	 var tdata = document.createElement("th");
	 row.appendChild(tdata);

	 for(var i = 0; i < headers.length; ++i) {
	 	tdata = document.createElement("th");
	 	tdata.innerHTML = headers[i];
	 	row.appendChild(tdata);
	 }
	 table.appendChild(row);

	 if(person) {
	 	row = document.createElement("tr");
	 	table.appendChild(row);
	 	tdata = document.createElement("td");
	 	tdata.innerHTML = person.name;
	 	row.appendChild(tdata);
	 	var personArr = person.eaten;
	 	for(var i = 0; i < personArr.length; ++i) {
	 		tdata = document.createElement("td");
	 		if(personArr[i])
	 			tdata.style.backgroundColor = "red";
	 			//tdata.bgcolor = "red";
	 		row.appendChild(tdata);
	 	}
	 	table.appendChild(row);
	 }

	 for(var j = 0; j < map.length; ++j) {
	 	if(j == pindex)
	 		continue;
	 	row = document.createElement("tr");
	 	table.appendChild(row);
	 	tdata = document.createElement("td");
	 	tdata.innerHTML = map[j].name;
	 	row.appendChild(tdata);
	 	console.log(map[j].name);
	 	var personArr = map[j].eaten;
	 	for(var i = 0; i < personArr.length; ++i) {
	 		console.log(personArr[i]);
	 		tdata = document.createElement("td");
	 		if(personArr[i])
	 			tdata.style.backgroundColor = "red";
	 			//tdata.bgcolor = "red";
	 		row.appendChild(tdata);
	 	}
	 	table.appendChild(row);
	 }

	 document.body.appendChild(table);
	 console.log("done");
}

$(document).ready(function () {
	drawTable(test);
});