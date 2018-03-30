function filterTable(var docVal, var strtVal, var endVal){
	var tab, height, width;
	tab=document.getElementById("sched_table");
	height=tab.rows.length;
	width=tab.rows[0].cells.length;
	for(var i=0; i<height; i++){
		if(docVal!="none"){
			if(docVal!=tab.rows[i].cells[4]){

				continue;
			}
		}
		if(strtVal!="none"){

			continue;
		}
		if(endVal!="none"){

			continue;
		}
		else{

		}
	}
}

function getDoctors(){
	var tab, docList;
	var docs=[];
	tab=document.getElementById("sched_table");
	docList=document.getElementById("doctors");
	//get all unique doc names
	for(var i=0; i<tab.rows.length; i++){
		if(!docs.includes(tab.rows[i].cells[5])){
			docs.push(tab.rows[i].cells[5]);
		}
	}
	//create options for select
	for(var i=0; i<docs.length; i++){
		var option=document.createElement("option");
		option.value=docs[i];
		option.text=docs[i];
		docList.appendChild(option);
	}
}