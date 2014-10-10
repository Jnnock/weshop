<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>登入weshop</title>

    <!-- Bootstrap -->
    <link href="__ROOT__/library/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="__ROOT__/public/css/login.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <div class="container">
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
<!-- NAV BAR --> <!-- NAV BAR -->

        <div id="sign">
          <form class="form-signin" role="form">
            <h2 class="form-signin-heading">请登入</h2>
            <input type="email" class="form-control" id="userEmail" placeholder="您的手机号" required autofocus>
            <input type="password" class="form-control" id="userPwd" placeholder="您的密码" required>
            <!--<div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>-->
            <div class="visible-md visible-lg">
              <div class="row col-md-6">
                <button class="btn btn-lg btn-primary btn-block" onclick="signIn()" type="button">Sign in</button>
              </div>
              <div class="row col-md-3"></div>
              <div class="row col-md-6">
                <button class="btn btn-lg btn-info btn-block" type="button" onclick="register()">Register</button>
              </div>
            </div>
            <div class="visible-sm visible-xs row">
              <div class="col-xs-6">
                <button class="btn btn-lg btn-primary btn-block" onclick="signIn()" type="button">登入</button>
              </div>
              <div class="col-xs-6">
                <button class="btn btn-lg btn-info btn-block" type="button" onclick="register()">注册</button>
              </div>
            </div>
          </form><!-- SIGN IN -->

        </div>

          <div id="register" style="display:none">
          <form class="form-signin" role="form">
            <h2 class="form-signin-heading">欢迎注册</h2>
            <input type="email" class="form-control" placeholder="您的邮箱" id="regEmail" required>
            <input type="text" class="form-control" placeholder="您的手机号码" id="regPhone" required>
            <input type="password" class="form-control" placeholder="设置您的密码" id="regPwd" required>
            <div class="visible-md visible-lg">
              <div class="row col-md-6">
                <button class="btn btn-lg btn-primary btn-block" type="button" onclick="returnToSign()">Return</button>
              </div>
              <div class="row col-md-3"></div>
              <div class="row col-md-6">
                <button class="btn btn-lg btn-info btn-block" type="button" onclick="registerAccount()">Register</button>
              </div>
            </div>
            <div class="visible-xs visible-sm">
              <div class="col-xs-5">
                <button class="btn btn-lg btn-primary btn-block" type="button" onclick="returnToSign()">返回</button>
              </div>
              <div class="col-xs-7">
                <button class="btn btn-lg btn-info btn-block" type="button" onclick="registerAccount()">确认</button>
              </div>
            </div>
          </form><!-- REGISTER -->

        </div>
        
        </div> <!-- /container -->
        <div id="contorlSucc" class="row" style="margin-top:30px;display:none">
          <div class="col-md-4"></div>
          <div class="bs-component  col-md-5">
              <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <div id="success"></div>
              </div>
            </div>
          </div>
          <div id="contorlErr" class="row" style="margin-top:30px;display:none">
          <div class="col-md-4"></div>
          <div class="bs-component  col-md-5">
              <div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <div id="error"></div>
              </div>
            </div>
          </div>
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__ROOT__/library/jquery.min.js"></script>
    <script src="__ROOT__/public/js/login.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__ROOT__/library/bootstrap/bootstrap.min.js"></script>
    <script>
      var PUBLIC = "__PUBLIC__";
      var ROOT = "__ROOT__";
      var APP = "__APP__";
    </script>
  </body>
</html>