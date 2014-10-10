<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>weshop前端</title>
    <!-- Bootstrap -->
    <link href="__ROOT__/library/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="__ROOT__/public/css/scojs.css" rel="stylesheet">
    <link href="__ROOT__/public/css/sco.message.css" rel="stylesheet">
    
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
            <li><a href="__APP__/Products/cart"><span class="glyphicon glyphicon-shopping-cart"> 购物车</span></a></li>
          </ul>
        </div>
      </div>
      </div> 
<!-- NAV BAR -->
    <!-- 首页轮播大图 -->
    <div class="theFirstDiv visible-xs visible-sm" id="plugin" style="margin-top:64px">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="__ROOT__/public/img/young-01.jpg" width="100%">
            <!-- <div class="carousel-caption">
              111
            </div>-->
          </div>
          <div class="item">
            <img src="__ROOT__/public/img/young-02.jpg" width="100%">
            <!-- <div class="carousel-caption">
              222
            </div>-->
          </div>
          <div class="item">
            <img src="__ROOT__/public/img/young-03.jpg" width="100%">
            <!-- <div class="carousel-caption">
              333
            </div>-->
          </div>
          <div class="item">
            <img src="__ROOT__/public/img/young-04.jpg" width="100%">
            <!-- <div class="carousel-caption">
              444
            </div>-->
          </div>
        </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <!-- <span class="glyphicon glyphicon-chevron-left"></span>-->
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <!-- <span class="glyphicon glyphicon-chevron-right"></span>-->
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    
    <div class="container">
      
      <div class="jumbotron visible-md visible-lg" style="margin-top:84px;background-image: url('__ROOT__/public/img/banner.jpg')">
        <h2>新品上市</h2>
        <p>配料：XXX,XXX,XXX,XXX,XXX.</p><p>烹饪方法：XXXXXXXXXXXXXXXXX..</p>
        <p><a class="btn btn-primary btn-lg">查看详细 &gt;&gt;</a></p>
        <!--<p><a href="weixin://contacts/profile/Mr_Tron">关注我们微信</a></p>-->
      </div>
      
      <!-- MOBILE -->
      <div class="row visible-xs visible-sm" style="margin-top:34px">
        <?php if(is_array($commodity)): foreach($commodity as $key=>$good): ?><div class="col-xs-12">
          <div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><?php echo ($good["name"]); ?></a></h3>
          </div>
          <div class="panel-body row">
            <div class="col-xs-6">
              <!--<a href="__APP__/Products/theproduct?good=<?php echo ($good["id"]); ?>"><img src="__ROOT__/public/upload/<?php echo ($good["image"]); ?>" width="120"/></a>-->
              <a href="__APP__/Products/theproduct?good=<?php echo ($good["id"]); ?>"><img src="__ROOT__/public/img/123.jpg" width="120"/></a>
            </div>
            <div class="col-xs-6">
              <p><a href="__APP__/Products/theproduct?good=<?php echo ($good["id"]); ?>"><b><?php echo ($good["name"]); ?></b></a></p>
              <p style="margin-top:-7px;width:120px;overflow: hidden;white-space: nowrap;word-break: keep-all;text-overflow: ellipsis;"><?php echo ($good["word"]); ?></p>
              <p style="margin-top:-7px;width:120px;overflow: hidden;white-space: nowrap;word-break: keep-all;text-overflow: ellipsis;">配料:<?php echo ($good["dosing"]); ?></p>
              <p>
                <a href="javascript:void(0)" onclick="addToCart(<?php echo ($good["id"]); ?>)" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-shopping-cart"></span>｜加入购物车</a>
              </p>
              </p>
            </div>
          </div>
        </div>
      </div><?php endforeach; endif; ?>
    </div>
    <!--MOBILE over-->
    
    <!-- PC -->
    <div class="row visible-lg visible-md" style="margin-top:34px">
      <?php if(is_array($commodity)): foreach($commodity as $key=>$good): ?><div class="col-md-4">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo ($good["name"]); ?></h3>
          </div>
          <div class="panel-body row">
            <div class="col-md-6">
              <p><a href="__APP__/Products/theproduct?good=<?php echo ($good["id"]); ?>"><b><?php echo ($good["name"]); ?></b></a></p>
              <p style="width:150px;color:red;overflow: hidden;white-space: nowrap;word-break: keep-all;text-overflow: ellipsis;"><?php echo ($good["word"]); ?></p>
              <p style="width:150px;overflow: hidden;white-space: nowrap;word-break: keep-all;text-overflow: ellipsis;">配料:<?php echo ($good["dosing"]); ?></p>
              <p><a href="javascript:void(0)" class="btn btn-primary" onclick="addToCart(<?php echo ($good["id"]); ?>)"><span class="glyphicon glyphicon-shopping-cart"></span> ｜ 加入购物车</a></p>
            </div>
            <div class="col-md-4">
              <a href="__APP__/Products/theproduct"><img src="__ROOT__/public/upload/<?php echo ($good["image"]); ?>" width="150"/></a>
            </div>
          </div>
        </div>
      </div>
      <!-- New --><?php endforeach; endif; ?>
      <!-- PC over -->
    </div>
    <!-- CONTAINER -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__ROOT__/library/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__ROOT__/library/bootstrap/bootstrap.min.js"></script>
    <script src="__ROOT__/public/js/glstfile.js"></script>
    <script src="__ROOT__/public/js/addToCart.js"></script>
    <script src="__ROOT__/public/js/sco.message.js"></script>
    <script type="text/javascript">
    var PUBLIC = "__PUBLIC__";
      var ROOT = "__ROOT__";
      var APP = "__APP__";
    $(document).ready(function() {
    $("#plugin").swiperight(function() {
    $(this).carousel('prev');
    });
    $("#plugin").swipeleft(function() {
    $(this).carousel('next');
    });
    });
    </script>
  </body>
</html>