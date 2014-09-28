<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>weshop后台管理中心</title>

    <!-- Bootstrap -->
    <link href="__ROOT__/library/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="__ROOT__/public/css/dashboard.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">绿行者后台管理</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav visible-xs visible-sm">
            <li><a href="__APP__/Index/manageType">管理分类</a></li>
            <li><a href="__APP__/Index/addGoods">添加商品</a></li>
            <li><a href="__APP__/Index/listAction">商品列表</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">设置 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">自提站点设置</a></li>
                <li><a href="__APP__/Index/users">用户管理</a></li>
                <li><a href="#">管理员管理</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="__APP__/Index/index">首页</a></li>
            <li><a href="#">管理员设置</a></li>
            <li><a onclick="logOut()" href="javascript:void(0)">退出管理</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>


  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li id="webAll"><a href="__APP__/Index">网站总览</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li id="manageType"><a href="__APP__/Index/manageType">管理商品分类</a></li>
    <li id="addGoods"><a href="__APP__/Index/addGoods">添加商品</a></li>
    <li id="list"><a href="__APP__/Index/listAction">修改商品信息</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li id="selfGet"><a href="">自提站点管理</a></li>
    <li id="manageUsers"><a href="__APP__/Index/users">用户管理</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li id="manageAdmin"><a href="">管理员管理</a></li>
    <li id="aboutUs"><a href="">关于我们</a></li>
  </ul>
</div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h4>按分类查询</h4>
          <!--<?php if(($mark == 1)): ?><div class="alert alert-dismissable alert-success">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>很好!</strong> 你成功的发布了新商品 </a>.
            </div>
          <?php else: ?>
            <div class="alert alert-dismissable alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>糟糕!</strong> 你的商品发布失败，请重试 </a>.
            </div><?php endif; ?>-->
            <div style="margin-top:40px">
              <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>分类</th>
      <th>商品名</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    <?php if(is_array($commodity)): foreach($commodity as $key=>$commodity): ?><tr>
      <td>
      </td>
      <td>
        <?php echo ($commodity["categor_id"]); ?></td>
      <td><?php echo ($commodity["name"]); ?></td>
      <td>Column content</td>
    </tr><?php endforeach; endif; ?>
  </tbody>
</table> 
        </div>
      </div>
    </div>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__ROOT__/library/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__ROOT__/library/bootstrap/bootstrap.min.js"></script>
    
    <script src="__ROOT__/public/js/admin.js"></script>
    <script type="text/javascript">
      var PUBLIC = "__PUBLIC__";
      var ROOT = "__ROOT__";
      var APP = "__APP__";
      document.getElementById('manageUsers').className += " active";
    </script> 
  </body>
</html>