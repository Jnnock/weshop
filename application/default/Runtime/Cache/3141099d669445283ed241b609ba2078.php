<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>weshop::Theproduct</title>

    <!-- Bootstrap -->
     <!-- Bootstrap -->
    <link href="__ROOT__/library/bootstrap/bootstrap.css" rel="stylesheet">
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
          <a href="../" class="navbar-brand" style="color:green"><b>绿行者</b></a>
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
              <a href="__APP__/Index/home"><span class="glyphicon glyphicon-user"> 用户</span></a>
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
    <div class="container" style="margin-top:90px">
        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
        <ul class="breadcrumb">
            <li><a href="__APP__/Index/index">全部菜品</a></li>
            <li><a href="#"><?php echo ($type); ?></a></li>
            <li class="active"><?php echo ($commodity["name"]); ?></li>
        </ul>
    </div>
        <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
        <div class="col-md-6">
            <div class="row">
            <div class="col-md-6">
            <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=" style="width: 200px; height: 200px;">	
            </div>
            <div class="col-md-6">
                <h4><?php echo ($commodity["name"]); ?></h4>
                <p><?php echo ($commodity["word"]); ?></p>
                <p>规格:300g 产地:阿拉斯加</p>
                <div class="row">
                    <div class="col-md-5" style="color:red;font-size:20px">¥10</div>
                    <div class="btn-group col-md-7">
                      <a href="#" class="btn btn-info">立即购买～</a>
                      <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">加入购物车</a></li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top:20px">商品介绍：<?php echo ($commodity["introduce"]); ?></div>
</div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <div class="list-group">
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading">推荐菜品1</h4>
                  <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading">推荐菜品2</h4>
                  <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
              </div>
            </div>	
            <div class="col-md-1"></div>
        </div>
    </div>
    <script src="__ROOT__/library/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__ROOT__/library/bootstrap/bootstrap.min.js"></script>
  </body>
</html>