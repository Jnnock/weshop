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
                <li><a href="__APP__/Index/selfInvite">自提站点设置</a></li>
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
    <li id="selfInvite"><a href="__APP__/Index/selfinvite">自提站点管理</a></li>
    <li id="manageUsers"><a href="__APP__/Index/users">用户管理</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li id="manageAdmin"><a href="">管理员管理</a></li>
    <li id="aboutUs"><a href="">关于我们</a></li>
  </ul>
</div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h4>添加新的商品</h4>
          <!--<?php if(($mark == 1)): ?><div class="alert alert-dismissable alert-success">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>很好!</strong> 你成功的发布了新商品 </a>.
            </div>
          <?php else: ?>
            <div class="alert alert-dismissable alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>糟糕!</strong> 你的商品发布失败，请重试 </a>.
            </div><?php endif; ?>-->
          <form action="__APP__/Index/upload" method="post" enctype="multipart/form-data">
            <div class="row" style="margin-top:40px">
              <div class="col-md-2">
                <select name="category_id" id="category" class="form-control">
                  <?php if(is_array($type)): foreach($type as $key=>$types): ?><option value="<?php echo ($types["id"]); ?>"><?php echo ($types["name"]); ?></option><?php endforeach; endif; ?>
                </select>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 form-group has-success">
                <input class="form-control" name="name" id="name" type="text" placeholder="商品名"autofocus>
              </div>
              <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-addon">¥ </span>
                    <input type="text" name="price" class="form-control">
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon">规格 </span>
                    <input type="text" class="form-control" name="standrad">
                    <span class="input-group-addon">g</span>
                  </div>
              </div>
            </div>
            
            <div style="margin-top:20px;margin-bottom:30px;width:40%">
              <label>选择上传的图片(图片大小为:150px*100px)</label>
              <input class="form-control" name='image' type="file">
            </div>
            <div style="margin-top:20px;margin-bottom:30px;width:80%">
              <label>配料:</label>
              <textarea class="form-control" name="dosing"></textarea>
            </div>
            <div style="margin-top:20px;margin-bottom:30px;width:80%">
              <label>食物特色:</label>
              <textarea class="form-control" name="word"></textarea>
            </div>
            <div style="margin-top:20px;margin-bottom:30px;width:80%">
              <label>简短介绍:</label>
              <textarea class="form-control" name="introduce"></textarea>
            </div>
            <button type="submit" class="btn btn-info">添加商品</button>
            </form>            
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
      document.getElementById('addGoods').className += " active";
    </script> 
  </body>
</html>