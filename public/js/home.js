var xmlHttp,secret; 

function createXMLRequest () {
	if(window.XMLHttpRequest){
		xmlHttp=new XMLHttpRequest();
	} else {
		xmlHttp=new ActiveXObject("Microsoft.XMLHttp");
	}
}

function saveName () {
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

function saveAdr () {
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

function getSomething () {
	createXMLRequest();
	var url= APP+"/Index/checkPwd";
	xmlHttp.open("GET",url);
	xmlHttp.onreadystatechange=function(){
		//if(xmlHttp.readyState==4 && xmlHttp.status==200){
		secret = xmlHttp.responseText;
		//alert(secret);
	};
	xmlHttp.send(); 
}

function check () {
	var oldPwd = document.getElementById('old').value;
	var newPwd = document.getElementById('new').value;
	var repeatPwd = document.getElementById('repeat').value;
	var p1=false,p2=false,p3=false;
	if (hex_md5(oldPwd) != secret) {
		//alert(hex_md5(secret)+"----"+)
		document.getElementById('oldPwdCheck').innerHTML = "您的原密码输入有误 ！";
	} else {
		document.getElementById('oldPwdCheck').innerHTML = "";
		p1=true;
	}
	if (newPwd == oldPwd) {
		document.getElementById('newPwdCheck').innerHTML = '您的新密码与原密码相同！';
	} else {
		document.getElementById('newPwdCheck').innerHTML = '';
		p2=true;
	}
	if (repeatPwd != newPwd) {
		document.getElementById('repeatPwdCheck').innerHTML = '您两次密码输入有误！';
	}  else {
		document.getElementById('repeatPwdCheck').innerHTML = '';
		p3=true;
	}
	if (p1 == true && p2 == true && p3 == true) {
		document.getElementById('subPwd').disabled = false;
	} else {
		document.getElementById('subPwd').disabled = true;
	}
}

function subPwd () {
	var newPwd = hex_md5(document.getElementById('new').value);
	var url= APP+"/Index/savePwd?newPwd="+newPwd;
	xmlHttp.open("GET",url);
	xmlHttp.onreadystatechange=function(){
		//if(xmlHttp.readyState==4 && xmlHttp.status==200){
		if (xmlHttp.responseText==1) {
			window.location = APP+"/Index";
		} else if (xmlHttp.responseText==2) {
			document.getElementById('saveErr').style.display = 'block';
		}
	};
	xmlHttp.send(); 
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
		 	alert("退出错误！")；
		 }
		//alert(secret);
	};
	xmlHttp.send(); 
}