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
    <link href="__ROOT__/public/css/all.css" rel="stylesheet">
    <link href="__ROOT__/public/css/index.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="padding-top:10px">
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
    <!-- 首页轮播大图 -->
    <div class="theFirstDiv visible-xs visible-sm">
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
      
      <div class="jumbotron visible-md visible-lg" style="margin-top:84px">
        <h2>新品上市</h2>
        <p>配料：XXX,XXX,XXX,XXX,XXX.</p><p>烹饪方法：XXXXXXXXXXXXXXXXX..</p>
        <p><a class="btn btn-primary btn-lg">查看详细 &gt;&gt;</a></p>
        <!--<p><a href="weixin://contacts/profile/Mr_Tron">关注我们微信</a></p>-->
      </div>
      
      <!-- MOBILE -->
      <div class="row visible-xs visible-sm" style="margin-top:34px">
        <div class="col-xs-12">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">新品推荐</h3>
            </div>
            <div class="panel-body row">
              <div class="col-xs-4">
                <img src="__ROOT__/public/img/001_02.png" width="120"/>
              </div>
              <div class="col-xs-1"></div>
              <div class="col-xs-6">
                <p><b>菜名XXXXX</b> <b>$100.01</b><br />
                佐料:XXX,XXX <br />
                配料:XXX,XXX<br />
                查看详细
              </p>
            </div>
          </div>
        </div>
      </div>
        <!-- 新品 -->
        <div class="col-xs-12">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">限时优惠</h3>
            </div>
            <div class="panel-body row">
              <div class="col-xs-4">
                <img src="__ROOT__/public/img/002_02.png" width="120"/>
              </div>
              <div class="col-xs-1"></div>
              <div class="col-xs-6">
                <p><b>菜名XXXXX</b> <b>$100.01</b><br />
                佐料:XXX,XXX <br />
                配料:XXX,XXX<br />
                查看详细
              </p>
              </div>
            </div>
          </div>
        </div>
        <!-- 限时 -->
      </div>
      <!--MOBILE-->
      
      <!-- PC -->
      <div class="row visible-lg visible-md" style="margin-top:34px">
        <div class="col-md-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">新品推荐</h3>
            </div>
            <div class="panel-body row">
              <div class="col-md-6">
                <p><b>菜名XXXXX</b></p>
                <p>佐料:XXX,XXX,XXX,XX,XX</p>
                <p>配料:XXX,XXX,XXX,XX,XX</p>
              </div>
              <div class="col-md-4">
                <img src="__ROOT__/public/img/001.png" width="150"/>
              </div>
            </div>
          </div>
        </div>
        <!-- New -->
        <div class="col-md-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">新品推荐</h3>
            </div>
            <div class="panel-body row">
              <div class="col-md-6">
                <p><b>菜名XXXXX</b></p>
                <p>佐料:XXX,XXX,XXX,XX,XX</p>
                <p>配料:XXX,XXX,XXX,XX,XX</p>
              </div>
              <div class="col-md-4">
                <img src="__ROOT__/public/img/003.png" width="150"/>
              </div>
            </div>
            
          </div>
        </div>
        <!-- 新品 -->
        <div class=" col-md-4">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">限时优惠</h3>
            </div>
            <div class="panel-body row">
              <div class="col-md-6">
                <p><b>菜名XXXXX</b></p>
                <p>佐料:XXX,XXX,XXX,XX,XX</p>
                <p>配料:XXX,XXX,XXX,XX,XX</p>
              </div>
              <div class="col-md-4">
                <img src="__ROOT__/public/img/002.png" width="150"/>
              </div>
            </div>
          </div>
        </div>
        <!-- 限时 -->
        
        <div class="col-md-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">新品推荐</h3>
            </div>
            <div class="panel-body row">
              <div class="col-md-6">
                <p><b>菜名XXXXX</b></p>
                <p>佐料:XXX,XXX,XXX,XX,XX</p>
                <p>配料:XXX,XXX,XXX,XX,XX</p>
              </div>
              <div class="col-md-4">
                <img src="__ROOT__/public/img/004.png" width="150"/>
              </div>
            </div>
            
          </div>
        </div>
        <!-- 新品 -->
        <div class=" col-md-4">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">限时优惠</h3>
            </div>
            <div class="panel-body row">
              <div class="col-md-6">
                <p><b>菜名XXXXX</b></p>
                <p>佐料:XXX,XXX,XXX,XX,XX</p>
                <p>配料:XXX,XXX,XXX,XX,XX</p>
              </div>
              <div class="col-md-4">
                <img src="__ROOT__/public/img/005.png" width="150"/>
              </div>
            </div>
          </div>
        </div>
        <!-- 限时 -->
        
        <div class=" col-md-4">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">限时优惠</h3>
            </div>
            <div class="panel-body row">
              <div class="col-md-6">
                <p><b>菜名XXXXX</b></p>
                <p>佐料:XXX,XXX,XXX,XX,XX</p>
                <p>配料:XXX,XXX,XXX,XX,XX</p>
              </div>
              <div class="col-md-4">
                <img src="__ROOT__/public/img/001.png" width="150"/>
              </div>
            </div>
          </div>
        </div>
        <!-- 限时 -->
      </div>
      <!-- PC -->
    </div>
    <!-- CONTAINER -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__ROOT__/library/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__ROOT__/library/bootstrap/bootstrap.min.js"></script>
  </body>
</html>