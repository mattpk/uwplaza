var addButton = function (name){
	//$.post("ajaxReq.php", {req: "restaurants"}).done(function(data) {

		//var itemList = JSON.parse(data);
		var itemList =["Benson","aunt Kitchen","Paninos."];
		var itemListM=[];
		for (var x=0;x <itemList.length;x++){
			var temp=itemList[x].replace(/\s/g, '');
			itemListM[x]=temp.replace(/\./g, '');
		}
		for (var x=0;x<itemListM.length;x++)
			console.log(itemListM[x]);
		for (var x=0;x<itemListM.length;x++){
			/*
			var div = document.createElement("div");
			//div.class = "col-sm-2";
			div.class ="";

			
			var btn = document.createElement('a');
			*/
			var cl;
			if (x%6==0||x%6==1)
				cl="btn btnC L";
			else if (x%6==2||x%6==3)
				cl="btn btnC M";
			else (x%6==4||x%6==5)
				cl="btn btnC L";

			console.log("yo");

			$("body").append('<div><a class = "' + cl + '"></a></div>'); 
			/*
			var t = document.createTextNode(itemList[x]);       // Create a text node
			btn.appendChild(t);                                // Append the text to <button>
			div.appendChild(btn);
			console.log(typeof div);
			document.body.appendChild(div);
			*/
		}

	//	});
	//});
}
$(document).ready(function() {
	addButton(0);
});
