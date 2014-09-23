function register () {
	document.getElementById("sign").style.display = "none";
	document.getElementById("register").style.display = "block";
}

function returnToSign () {
	document.getElementById("sign").style.display = "block";
	document.getElementById("register").style.display = "none";
}

var xmlHttp; 

function createXMLRequest(){
	if(window.XMLHttpRequest){
		xmlHttp=new XMLHttpRequest();
	} else {
		xmlHttp=new ActiveXObject("Microsoft.XMLHttp");
	}
}

function registerAccount (){
	createXMLRequest();
	var email=document.getElementById('regEmail').value;
	var phone=document.getElementById('regPhone').value;
	var pwd=document.getElementById('regPwd').value;
	var url= APP+"/Index/reg";
	xmlHttp.open("POST",url);
	xmlHttp.onreadystatechange=function(){
		/*if(xmlHttp.readyState==4 && xmlHttp.status==200){
			//alert(xmlHttp.readyState+"----"+xmlHttp.status);
			if (parseInt(xmlHttp.responseText)==0) {
				document.getElementById("contorlSucc").style.display = "block";
				document.getElementById("success").innerHTML = "您注册成功~!购物愉快~";
			} else if (parseInt(xmlHttp.responseText)==1){
				document.getElementById("contorlErr").style.display = "block";
				document.getElementById("error").innerHTML = "出错啦biu~!";
			}
		} else {
			alert(xmlHttp.readyState+"----"+xmlHttp.status);
			document.getElementById("contorlErr").style.display = "block";
			document.getElementById("error").innerHTML = "出错啦~!";
		}*/
		if (parseInt(xmlHttp.responseText)==0) {
			document.getElementById("contorlSucc").style.display = "block";
			document.getElementById("success").innerHTML = "您注册成功~!购物愉快~";
			setTimeout(window.location.href=APP,3);
		} else if (parseInt(xmlHttp.responseText)==1){
			document.getElementById("contorlErr").style.display = "block";
			document.getElementById("error").innerHTML = "出错啦biu~!";
		} else if (parseInt(xmlHttp.responseText)==1){
			document.getElementById("contorlErr").style.display = "block";
			document.getElementById("error").innerHTML = "您的手机号已注册~!";
		} else if (parseInt(xmlHttp.responseText)==1){
			document.getElementById("contorlErr").style.display = "block";
			document.getElementById("error").innerHTML = "您的邮箱已注册~!";
		}
	};
	xmlHttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlHttp.send("email="+email+"&phone="+phone+"&pwd="+pwd); 
}

function signIn (){
	createXMLRequest();
	var email=document.getElementById('userEmail').value;
	var pwd=document.getElementById('userPwd').value;
	var url=APP+"/Index/sign";
	xmlHttp.open("POST",url);
	xmlHttp.onreadystatechange=function(){
		if(xmlHttp.readyState==4 && xmlHttp.status==200){
			if (parseInt(xmlHttp.responseText)==0) {
				window.location = APP;
			} else if (parseInt(xmlHttp.responseText)==1){
				document.getElementById("contorlErr").style.display = "block";
				document.getElementById("error").innerHTML = "密码错啦~!";
			}
		} else {
			document.getElementById("contorlErr").style.display = "block";
			document.getElementById("error").innerHTML = "服务器出错~";
		}
	};
	xmlHttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlHttp.send("email="+email+"&pwd="+pwd); 
}
