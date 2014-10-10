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
                <?php
 $type = []; ?>
                <?php if(is_array($c)): foreach($c as $key=>$c): ?><li><a href="__APP__/Products/index?type=<?php echo ($c["id"]); ?>">
                  <?php
 $type[$c['id']] = $c['name']; echo $c['name']; ?>
                  </a></li><?php endforeach; endif; ?>
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
            <li><a href="#"><?php echo ($types); ?></a></li>
            <li class="active"><?php echo ($commodity["name"]); ?></li>
          </ul>
        </div>
        <div class="col-md-2"></div>
      </div>
      <!-- PC -->
      <div class="row visible-md visible-lg">
        <div class="col-md-1"></div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <!--<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=" style="width: 200px; height: 200px;">  -->
              <img src="__ROOT__/public/upload/<?php echo ($commodity["image"]); ?>" class="img-thumbnail" width="200" />
            </div>
            <div class="col-md-6">
              <h4><?php echo ($commodity["name"]); ?></h4>
              <p><?php echo ($commodity["word"]); ?></p>
              <p>规格: <?php echo ($commodity["standrad"]); ?>g 产地: <?php echo ($commodity["position"]); ?></p>
              <div class="row">
                <div class="col-md-5" style="color:red;font-size:20px">¥<?php echo ($commodity["price"]); ?></div>
                <div class="col-md-4">
                  <a href="#" class="btn btn-info btn-sm">立即购买～</a>
                </div>
                <div class="col-md-3">
                   <a href="javascript:void(0)" class="btn btn-primary btn-sm" onclick="addToCart(<?php echo ($commodity["id"]); ?>)">加入购物车</a>
                </div>
              </div>
            </div>
          </div>
          <div style="margin-top:20px">商品介绍：<?php echo ($commodity["introduce"]); ?></div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <div class="list-group">
            <div class="row list-group-item">
              <div class="col-md-6" style="margin-left:-10px">
                <img src="__ROOT__/public/upload/<?php echo ($hot["image"]); ?>" width="120" />
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5" style="margin-right:-10px">
                <h5 class="list-group-item-heading"><a href="__APP__/Products/theProduct?good=<?php echo ($hot["id"]); ?>"><?php echo ($hot["name"]); ?></a></h5>
                <p class="list-group-item-text"> <?php echo ($hot["word"]); ?>.</p>
                <p class="list-group-item-text">规格: <?php echo ($hot["standrad"]); ?>g</p>
                <p class="list-group-item-text">产地: <?php echo ($hot["position"]); ?></p>
                <p class="list-group-item-text"><span class="label label-primary">¥ <?php echo ($hot["price"]); ?>.</span></p>
              </div>
            </div>
            <div class="row list-group-item">
              <div class="col-md-6" style="margin-left:-10px">
                <img src="__ROOT__/public/upload/<?php echo ($new["image"]); ?>" width="120" />
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5" style="margin-right:-10px">
                <h5 class="list-group-item-heading"><a href="__APP__/Products/theProduct?good=<?php echo ($new["id"]); ?>"><?php echo ($new["name"]); ?></a></h5>
                <p class="list-group-item-text"> <?php echo ($new["word"]); ?>.</p>
                <p class="list-group-item-text">规格: <?php echo ($new["standrad"]); ?>g</p>
                <p class="list-group-item-text">产地: <?php echo ($new["position"]); ?></p>
                <p class="list-group-item-text"><span class="label label-primary">¥ <?php echo ($new["price"]); ?>.</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
      <!-- PC OVER -->

      <!-- MOBILE -->
      <div class="visible-xs visible-sm">
      <div class="row">
        <div class="col-xs-3 col-sm-3">
          <img src="__ROOT__/public/upload/<?php echo ($commodity["image"]); ?>" width="100" />
          <p style="margin-top:9px"><span class="label label-primary">¥ <?php echo ($commodity["price"]); ?></span></p>
        </div>
        <div class="col-xs-2 col-sm-2"></div>
        <div class="col-xs-7 col-sm-7" style="margin-top:-10px">
          <h5><?php echo ($commodity["name"]); ?></h5>
          <p><?php echo ($commodity["word"]); ?></p>
          <p>规格: <?php echo ($commodity["standrad"]); ?>g 产地: <?php echo ($commodity["position"]); ?></p>
          <a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-shopping-cart"> 购物车</span></a>
          <a href="#" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-check"> 购买</span></a>
        </div>
      </div>
      <p style="margin-top:30px">商品介绍: <?php echo ($commodity["introduce"]); ?></p>
    </div>
      <!-- MOBILE OVER -->
    </div>
    <script src="__ROOT__/library/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__ROOT__/library/bootstrap/bootstrap.min.js"></script>
  </body>
</html>