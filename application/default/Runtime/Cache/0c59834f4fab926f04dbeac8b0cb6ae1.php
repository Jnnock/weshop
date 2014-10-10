<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>weshop::HOME</title>

    <!-- Bootstrap core CSS -->
    <link href="__ROOT__/library/bootstrap/bootstrap.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
<!-- NAV BAR --> <!-- NAV BAR -->

    <div class="container" style="margin-top:90px">

      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7 blog-main">
          <div class="row visible-xs visible-sm" style="margin-bottom:30px">
  <div class="col-xs-4 col-sm-4">
    <a href="__APP__/Index/pwd"><img src="__ROOT__/public/img/book.png" width="70" /></a>
  </div>
  <div class="col-xs-4 col-sm-4">
    <a href="__APP__/Index/address"><img src="__ROOT__/public/img/map.png" width="70" /></a>
  </div>
  <div class="col-xs-4 col-sm-4">
    <a href="__APP__/Index/order"><img src="__ROOT__/public/img/shop.png" width="70" /></a>
  </div>
</div>

          <div class="blog-post">
            <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab">我的所有订单</a></li>
          <li><a href="#profile" data-toggle="tab">待付款</a></li>
          <li><a href="#already" data-toggle="tab">已成交</a></li>

        </ul>
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade active in" id="home">
            <div class="well" style="margin-top:20px">
              Look, I'm in a well!
            </div>
            <div class="well" style="margin-top:20px">
              Look, I'm in a well!
            </div>
            <div class="well" style="margin-top:20px">
              Look, I'm in a well!
            </div>
          </div>
          <div class="tab-pane fade" id="profile">
            <div class="well" style="margin-top:20px">
              Look, I'm in a well!
            </div>
            <div class="well" style="margin-top:20px">
              Look, I'm in a well!
            </div>
            <div class="well" style="margin-top:20px">
              Look, I'm in a well!
            </div>
          </div>
          <div class="tab-pane fade" id="already">
            <div class="well" style="margin-top:20px">
              Look, I'm in a well!
            </div>
            <div class="well" style="margin-top:20px">
              Look, I'm in a well!
            </div>
            <div class="well" style="margin-top:20px">
              Look, I'm in a well!
            </div>
          </div>
        </div>
            
          </div><!-- /.blog-post -->

          
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-md-3 col-sm-offset-1 blog-sidebar visible-lg visible-md">
  <div class="sidebar-module">
    <h4>交易管理</h4>
    <ol class="list-unstyled">
      <li><a href="__APP__/Index/order">我的所有订单</a></li>
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>个人设置</h4>
    <ol class="list-unstyled">
      <li><a href="__APP__/Index/address">我的地址</a></li>
      <li><a href="__APP__/Index/pwd">密码修改</a></li>
      <li><a href="javascript:void(0)" onclick="logOut()">退出</a></li>
    </ol>
  </div>
</div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__ROOT__/library/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__ROOT__/library/bootstrap/bootstrap.min.js"></script>
    <script>
      var PUBLIC = "__PUBLIC__";
      var ROOT = "__ROOT__";
      var APP = "__APP__";
    </script>
    <script src="__ROOT__/public/js/home.js"></script>
  </body>
</html>