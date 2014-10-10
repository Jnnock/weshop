var xmlHttp; 

function createXMLRequest () {
	if(window.XMLHttpRequest){
		xmlHttp=new XMLHttpRequest();
	} else {
		xmlHttp=new ActiveXObject("Microsoft.XMLHttp");
	}
}

function addToCart(goods) {
	createXMLRequest();
	var url= APP+"/Products/addCart?goods="+goods;
	xmlHttp.open("GET",url);
	xmlHttp.onreadystatechange=function(e){
		//if(xmlHttp.readyState==4 && xmlHttp.status==200){
		 if(xmlHttp.responseText==1){
		 	e.preventDefault();
    		$.scojs_message('您成功将商品添加进购物车', $.scojs_message.TYPE_OK);
		 } else if (xmlHttp.responseText == 2) {
		 	window.location = APP+"/Index/home";
		 } else {
		 	e.preventDefault();
    		$.scojs_message('添加进购物车失败，请重试', $.scojs_message.TYPE_ERROR);
		 }
		//alert(secret);
	};
	xmlHttp.send(); 
}

function delGoodFromCart(goods) {
	createXMLRequest();
	var url= APP+"/Products/delCart?goods="+goods;
	xmlHttp.open("GET",url);
	xmlHttp.onreadystatechange=function(e){
		//if(xmlHttp.readyState==4 && xmlHttp.status==200){
		 if(xmlHttp.responseText==1){
		 	document.getElementById('goodsM'+goods).style.display = 'none';
		 	document.getElementById('goodsB'+goods).style.display = 'none';
		 } else if (xmlHttp.responseText==0) {
		 	e.preventDefault();
    		$.scojs_message('从购物车中移除失败', $.scojs_message.TYPE_ERROR);
		 } else {
		 	e.preventDefault();
    		$.scojs_message('服务器有小怪兽', $.scojs_message.TYPE_ERROR);
		 }
		//alert(secret);
	};
	xmlHttp.send(); 
}