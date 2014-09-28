<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>weshop后台登入</title>

    <!-- Bootstrap -->
    <link href="__ROOT__/library/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="__ROOT__/public/css/login.css" rel="stylesheet">
	<link href="__ROOT__/public/css/index.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

    body {
      padding-top: 50px;
      padding-bottom: 40px;
      background-color: #eee;
    }

    .form-signin {
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
    }
    .form-signin .form-signin-heading,
    .form-signin .checkbox {
      margin-bottom: 10px;
    }
    .form-signin .checkbox {
      font-weight: normal;
    }
    .form-signin .form-control {
      position: relative;
      height: auto;
      -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
              box-sizing: border-box;
      padding: 10px;
      font-size: 16px;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    </style>
  </head>
  <body style="background-color:#F2F2F2;">

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
          <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0)" target="_blank"><span class="glyphicon glyphicon-home"> 返回首页</span></a></li>
            </li>
          </ul>
        </div>
      </div>
      </div> <!-- NAV BAR -->

     <div class="container">

          <form class="form-signin" role="form">
            <h2 class="form-signin-heading">请登入</h2>
            <input type="email" class="form-control" id="userEmail" placeholder="您的邮箱" required autofocus>
            <input type="password" id="userPwd" class="form-control" placeholder="您的密码" required>
            <!--<div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>-->
            <button class="btn btn-lg btn-primary btn-block" type="button" onclick="signInAsAdmin()">Sign in</button>
          </form>
          <div id="contorlErr" class="row" style="margin-top:30px;display:none">
          <div class="col-md-4"></div>
          <div class="bs-component  col-md-5">
              <div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <div id="error"></div>
              </div>
            </div>
          </div>
        </div> <!-- /container -->

    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__ROOT__/library/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__ROOT__/library/bootstrap/bootstrap.min.js"></script>
    <script src="__ROOT__/public/js/login.js"></script>
    <script type="text/javascript">
      var PUBLIC = "__PUBLIC__";
      var ROOT = "__ROOT__";
      var APP = "__APP__";
    </script>
  </body>
</html>