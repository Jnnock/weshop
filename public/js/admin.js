var xmlHttp; 

function createXMLRequest () {
	if(window.XMLHttpRequest){
		xmlHttp=new XMLHttpRequest();
	} else {
		xmlHttp=new ActiveXObject("Microsoft.XMLHttp");
	}
}

function logOut () {
	createXMLRequest();
	var url= APP+"/Index/out";
	xmlHttp.open("GET",url);
	xmlHttp.onreadystatechange=function(){
		//if(xmlHttp.readyState==4 && xmlHttp.status==200){
		 if(xmlHttp.responseText==1){
		 	window.location = APP+"/Index";
		 } else {
		 	alert("退出错误！");
		 }
		//alert(secret);
	};
	xmlHttp.send(); 
}

function addType () {
	createXMLRequest();
	var name = document.getElementById('typeName').value;
	var url= APP+"/Index/addType?name="+name;
	xmlHttp.open("GET",url);
	xmlHttp.onreadystatechange=function(){
		//if(xmlHttp.readyState==4 && xmlHttp.status==200){
		 if(xmlHttp.responseText==1){
		 	document.getElementById('addSuccess').style.display = 'block';
		 	document.getElementById('addError').style.display = 'none';
		 } else {
		 	document.getElementById('addError').style.display = 'block';
		 	document.getElementById('addSuccess').style.display = 'none';
		 }
		//alert(secret);
	};
	xmlHttp.send(); 
}

function addAdr() {
	createXMLRequest();
	var city = document.getElementById('city').value;
	var area = document.getElementById('area').value;
	var detail = document.getElementById('detail').value;
	var url= APP+"/Index/addAdr?city="+city+"&area="+area+"&detail="+detail;
	xmlHttp.open("GET",url);
	xmlHttp.onreadystatechange=function(){
		//if(xmlHttp.readyState==4 && xmlHttp.status==200){
		 if(xmlHttp.responseText==1){
		 	document.getElementById('addSuccess').style.display = 'block';
		 	document.getElementById('addError').style.display = 'none';
		 } else {
		 	document.getElementById('addError').style.display = 'block';
		 	document.getElementById('addSuccess').style.display = 'none';
		 }
		//alert(secret);
	};
	xmlHttp.send(); 
}

function deleteType (id) {
	createXMLRequest();
	var url= APP+"/Index/delType?typeid="+id;
	xmlHttp.open("GET",url);
	xmlHttp.onreadystatechange=function(){
		//if(xmlHttp.readyState==4 && xmlHttp.status==200){
		 if(xmlHttp.responseText==1){
		 	document.getElementById('type'+id).style.display = 'none';
		 	$('#showResult').modal('show');
		 	document.getElementById('changeResult').innerHTML = "删除成功～！";
		 } else {
		 	$('#showResult').modal('show');
		 	document.getElementById('changeResult').innerHTML = '删除失败～！';
		 }
		//alert(secret);
	};
	xmlHttp.send(); 
}

function deleteAdr (id) {
	createXMLRequest();
	var url= APP+"/Index/delAdr?adrid="+id;
	xmlHttp.open("GET",url);
	xmlHttp.onreadystatechange=function(){
		//if(xmlHttp.readyState==4 && xmlHttp.status==200){
		 if(xmlHttp.responseText==1){
		 	document.getElementById('type'+id).style.display = 'none';
		 	$('#showResult').modal('show');
		 	document.getElementById('changeResult').innerHTML = "删除成功～！";
		 } else {
		 	$('#showResult').modal('show');
		 	document.getElementById('changeResult').innerHTML = '删除失败～！';
		 }
		//alert(secret);
	};
	xmlHttp.send(); 
}

function changeType (tid) {
	document.getElementById('typeName'+tid).style.display = 'none';
	document.getElementById('typeInput'+tid).style.display = 'inline';
	document.getElementById('typeChangeBtn'+tid).style.display = 'none';
	document.getElementById('typeModBtn'+tid).style.display = 'inline';
}

function modType (tid) {
	var newName = document.getElementById('typeInput'+tid).value;
	document.getElementById('typeName'+tid).innerHTML = newName;
	document.getElementById('typeInput'+tid).style.display = 'none';
	document.getElementById('typeChangeBtn'+tid).style.display = 'line';
	document.getElementById('typeModBtn'+tid).style.display = 'none';
	createXMLRequest();
	var url = APP+"/Index/modType?newName="+newName+'&typeid='+tid;
	xmlHttp.open("GET",url);
	xmlHttp.onreadystatechange=function(){
		//if(xmlHttp.readyState==4 && xmlHttp.status==200){
		 if(xmlHttp.responseText==1){
		 	document.getElementById('typeName'+tid).innerHTML = newName;
		 	$('#showResult').modal('show');
		 	document.getElementById('changeResult').innerHTML = "修改成功～！";
		 } else {
		 	$('#showResult').modal('show');
		 	document.getElementById('changeResult').innerHTML = '修改失败～！';
		 }
		//alert(secret);
	};
	xmlHttp.send(); 
}

function addImage () {
	var area = document.getElementById('')
}

function getArea() {
	createXMLRequest();
	var value=document.getElementById('city').value;
	var url=APP+"/Index/getArea?city="+value;
	xmlHttp.open("GET",url);
	xmlHttp.onreadystatechange=function(){
		if(xmlHttp.readyState==4 && xmlHttp.status==200){
			var myObj = eval(xmlHttp.responseText);
			document.getElementById('area').options.length=0;
			for(var i=0;i<myObj.length;i++){
				//var o=result[i].split('*');
				//alert(myObj[i].id)
				document.getElementById('area').add(new Option(myObj[i].area,myObj[i].id));
			}
		}
	};
	xmlHttp.send(); 
}

function typeSearch() {
	var value = document.getElementById('category').value;
	window.location = APP+"/Index/listAction?method="+value;
}