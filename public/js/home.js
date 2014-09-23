var xmlHttp; 

function createXMLRequest(){
	if(window.XMLHttpRequest){
		xmlHttp=new XMLHttpRequest();
	} else {
		xmlHttp=new ActiveXObject("Microsoft.XMLHttp");
	}
}

function saveName (){
	createXMLRequest();
	var name=document.getElementById('inputName').value;
	var url= APP+"/Index/saveName?newname="+name;
	xmlHttp.open("GET",url);
	xmlHttp.onreadystatechange=function(){
		//if(xmlHttp.readyState==4 && xmlHttp.status==200){
		if (parseInt(xmlHttp.responseText)==1) {
			$('#modal1').modal('hide');
			document.getElementById('newName').innerHTML=name;
		} else if (parseInt(xmlHttp.responseText)==2) {
			document.getElementById("saveErr").style.display = "block";
		}
	};
	xmlHttp.send(); 
}

