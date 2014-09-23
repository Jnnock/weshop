<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>weshop::商品</title>

    <!-- Bootstrap -->
     <!-- Bootstrap -->
    <link href="__ROOT__/library/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="__ROOT__/public/css/all.css" rel="stylesheet">
	<link href="__ROOT__/public/css/products.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<!-- 导航条 -->
		<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">电商名</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><span class="glyphicon glyphicon-th-list"> 分类 </span><span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="../default/">荤菜</a></li>
                <li><a href="javascript:void(0)">素菜</a></li>
                <li><a href="javascript:void(0)">汤类</a></li>
                <li><a href="javascript:void(0)">食材</a></li>
                <!--<li class="divider"></li>-->
              </ul>
            </li>
            <li>
              <a href="__APP__/Index/login"><span class="glyphicon glyphicon-user"> 用户</span></a>
            </li>
            <li>
              <a href="__APP__/Products/index"><span class="glyphicon glyphicon-list-alt"> 全部分类</span></a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="__APP__/Index/aboutus"><span class="glyphicon glyphicon-info-sign"> 关于我们</span></a></li>
            <li><a href="__APP__/Products/cart" target="_blank"><span class="glyphicon glyphicon-shopping-cart"> 购物车</span></a></li>
          </ul>
        </div>
      </div>
      </div> 
<!-- NAV BAR -->
  	
  	
  	
    <div class="container theFirstDivSep">
<!-- 产品介绍 缩略图 -->
		<div class="row">

      <div class="col-md-3">
        <div class="bs-component hidden-xs">
              <div class="list-group">
                <a href="#" class="list-group-item active"><b>全部分类</b></a>
                <a href="#" class="list-group-item"><b>荤菜</b></a>
                <a href="#" class="list-group-item"><b>素菜</b></a>
                <a href="#" class="list-group-item"><b>汤类</b></a>
                <a href="#" class="list-group-item"><b>食材</b></a>
              </div>
          </div>
        </div> <!-- NAV -->

      <div class="col-md-1"></div>

      <div class="col-md-8">
        <div class="row"> 
          <div class="col-md-6">
            <div class="well">
              看，我是一款商品
            </div>
          </div>
          <div class="col-md-6">
            <div class="well">
              看，我是一款商品
            </div>
          </div>
          <div class="col-md-6">
            <div class="well">
              看，我是一款商品
            </div>
          </div>
          <div class="col-md-6">
            <div class="well">
              看，我是一款商品
            </div>
          </div>
          <div class="col-md-6">
            <div class="well">
              看，我是一款商品
            </div>
          </div>
          <div class="col-md-6">
            <div class="well">
              看，我是一款商品
            </div>
          </div>


        </div>

      

      </div>  <!-- ROW -->

		</div> <!-- CONTAINER -->
	


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__ROOT__/library/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__ROOT__/library/bootstrap/bootstrap.min.js"></script>
  	<script type="text/javascript">
    	$(function() {
    		$("#header2").attr("class","active");
    	});
    </script>
  </body>
</html>