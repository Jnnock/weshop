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

function saveAdr (){
	createXMLRequest();
	var province=document.getElementById('sheng').value;
	var city=document.getElementById('shi').value;
	var area=document.getElementById('qu').value;
	var detail=document.getElementById('xiangxi').value;
	var url= APP+"/Index/saveArd?province="+province+"&city="+city+"&area="+area+"&detail="+detail;
	xmlHttp.open("GET",url);
	xmlHttp.onreadystatechange=function(){
		//if(xmlHttp.readyState==4 && xmlHttp.status==200){
		if (parseInt(xmlHttp.responseText)==1) {
			province.value="";
			city.value="";
			area.value="";
			detail.value="";
			document.getElementById('adrlist').innerHTML+="<p>"+province+" "+city+" "+area+" "+detail+"</p>";
		} else if (parseInt(xmlHttp.responseText)==2) {
			document.getElementById("saveErr").style.display = "block";
		}
	};
	xmlHttp.send(); 
}