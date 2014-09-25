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
            <h5>欢迎回来 <span id="newName"><?php echo ($name); ?></span><a href="javascript:void(0)" style="font-size:12px" data-toggle="modal" data-target=".modal"> 修改名字</a></h5>
            <div class="alert alert-dismissable alert-danger" id="saveErr" style="display:none">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Oh 不!</strong><b> <a href="#" class="alert-link">保存新名字失败</a> 请重试.</b>
            </div>
            <p class="blog-post-meta">截至<?php echo ($nowTime); ?></p>

            <p>您一共成交XX笔.一共积分XXX分.</p>
            <hr>
            <p>July 6, 2014 我买了第三份菜品.</p>
            <p>March 3, 2014 我买了第二份菜品.</p>
            <p>January 21, 2014 我买了第一份菜品.</p>
            <p><?php echo ($bornTime); ?> 我来到了这个市场.</p>
            
          </div><!-- /.blog-post -->

          
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar visible-lg visible-md">
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


<div class="modal fade" id="modal1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">请输入您的新名字</h4>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <div class="col-md-1"></div>
          <label for="inputEmail" class="col-md-2 control-label">名字:</label>
          <div class="col-md-8">
            <input type="text" class="form-control" id="inputName" placeholder="名字">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary" onclick="saveName()">保存修改</button>
      </div>
    </div>
  </div>
</div>

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