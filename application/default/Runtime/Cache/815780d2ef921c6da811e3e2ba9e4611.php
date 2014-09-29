<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>weshop::购物车</title>
    <!-- Bootstrap -->
    <!-- Bootstrap -->
    <link href="__ROOT__/library/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="__ROOT__/public/css/products.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
 $goods = []; ?>
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
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header">
            <h4 id="nav"><strong>我的购物清单</strong></h4>
            提货地址
          </div>
        </div>
      </div>
      <?php if(is_array($need)): foreach($need as $key=>$need): header("Content-Type: text/html; charset=utf-8"); $con = mysql_connect('127.0.0.1','root','liu1feng'); mysql_query("SET NAMES utf8"); mysql_select_db('weshop',$con); $result = $sql = "select * from goods where id = ".$need['goods_id']; while ($row = mysql_fetch_array($result)) { ?>
      <div class="panel panel-primary">
        <div class="panel-heading"><strong><?php echo $row['name']; ?></strong></div>
        <input type="hidden" name="goodsId" value="<?php echo $row['id']; ?><" />
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4">
              <img src="__ROOT__/public/upload/<?php echo $row['image']; ?>" />
            </div>
            
            <div class="col-md-1"></div>
            <div class="col-md-1">
              数量： 
            </div>
            <div class="col-md-1">
               <select name="count">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
               </select>
            </div>
            <div class="col-md-1">

            </div>
          </div>
        </div>
      </div>
      <?php
 } endforeach; endif; ?>
    <div class="row">
      <div class="col-md-6">
    <div class="panel panel-primary visible-md visible-lg ">
        <div class="panel-heading"><strong>我是一种菜</strong></div>
        <input type="hidden" name="goodsId" value="123" />
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4 col-xs-4">
              <img src="__ROOT__/public/img/002_02.png" width="150" />
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7 col-xs-7">
              <p><a href="#"><h5>我是一种菜</h5></a></p>
              <p><b>¥ 20</b></p>
              <div>规格：300g 产地：青岛</div>
              <label>数量：</label>
               <select name="count">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
               </select>
               <div><a href="jacascript:void(0)">从购物车中移除</a></div>
            </div>
            <div class="col-md-1">

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

      <div class="panel panel-primary visible-xs visible-sm">
        <div class="panel-heading"><strong>我是一种菜</strong></div>
        <input type="hidden" name="goodsId" value="123" />
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4 col-xs-4">
              <img src="__ROOT__/public/img/002_02.png" width="80" />
            </div>
            
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-2 col-xs-7">
              <p>规格：300g 产地：青岛</p>
              <label>数量：</label>
               <select name="count">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
               </select>
               <div><a href="jacascript:void(0)">从购物车中移除</a></div>
            </div>
            <div class="col-md-1">

            </div>
          </div>
        </div>
      </div>
      <a href="javascript:void(0)" class="btn btn-primary"><span class="glyphicon glyphicon-ok"> | 去结算 </span></a>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__ROOT__/library/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__ROOT__/library/bootstrap/bootstrap.min.js"></script>
  </body>
</html>