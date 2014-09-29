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
		 } else {
		 	e.preventDefault();
    		$.scojs_message('添加进购物车失败，请重试', $.scojs_message.TYPE_ERROR);
		 }
		//alert(secret);
	};
	xmlHttp.send(); 
}