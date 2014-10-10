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
     <link href="__ROOT__/public/css/scojs.css" rel="stylesheet">
    <link href="__ROOT__/public/css/sco.message.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <style type="text/css">
    body{
      margin-top:60px;
      margin-bottom:20px;
    }
    </style>
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
      <!-- BROSWER -->
      <div class="row">
        <?php if(is_array($need)): foreach($need as $key=>$demand): header("Content-Type: text/html; charset=utf-8"); $con = mysql_connect('127.0.0.1','root','liu1feng'); mysql_query("SET NAMES utf8"); mysql_select_db('weshop',$con); $sql = "select * from goods where id = ".$demand['goods_id']; $result = mysql_query($sql); while ($row = mysql_fetch_array($result)) { $goods[$i]['name'] = $row['name']; $goods[$i]['image'] = $row['image']; $goods[$i]['id'] = $row['id']; $goods[$i]['price'] = $row['price']; $goods[$i]['standrad'] = $row['standrad']; $goods[$i]['position'] = $row['position']; ?>
        <div class="col-md-6" id="goodsB<?php echo $demand['id']; ?>">
          <div class="panel panel-primary visible-md visible-lg ">
            <div class="panel-heading"><b><?php echo $row['name']; ?></b></div>
            <input type="hidden" name="goodsId" value="<?php echo $row['id']; ?>" />
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                  <img src="__ROOT__/public/upload/<?php echo $row['image']; ?>"  width="150" />
                </div>
                
                <div class="col-md-1"></div>
                <div class="col-md-7 col-xs-7">
                  <p><a href="__APP__/Products/theproduct/?good=<?php echo $row['id']; ?>"><h5><?php echo $row['name']; ?></h5></a></p>
                  <p><b>¥ <?php echo $row['price']; ?></b></p>
                  <div>规格：<?php echo $row['standrad'] ?>g 产地：<?php echo $row['position']; ?></div>
                  <label>数量：</label>
                  <select name="count">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                  <div><a href="javascript:void(0)" onclick="delGoodFromCart(<?php echo $demand['id']; ?>)">从购物车中移除</a></div>
                </div>
                <div class="col-md-1">
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
 } endforeach; endif; ?>
      </div>
      <!-- BROSWER -->

      <!-- MOBILE -->
     <?php if(is_array($need)): foreach($need as $key=>$de): header("Content-Type: text/html; charset=utf-8"); $con = mysql_connect('127.0.0.1','root','liu1feng'); mysql_query("SET NAMES utf8"); mysql_select_db('weshop',$con); $sql = "select * from goods where id = ".$de['goods_id']; $result = mysql_query($sql); $i = 0; while ($row = mysql_fetch_array($result)) { $goods[$i]['name'] = $row['name']; $goods[$i]['image'] = $row['image']; $goods[$i]['id'] = $row['id']; $goods[$i]['price'] = $row['price']; $goods[$i]['standrad'] = $row['standrad']; $goods[$i]['position'] = $row['position']; ?>
        <div class="panel panel-primary visible-xs visible-sm" id="goodsM<?php echo $de['id']; ?>">
          <div class="panel-heading"><b><?php echo $row['name']; ?></b></div>
          <input type="hidden" name="goodsId" value="<?php echo $row['id']; ?>" />
          <div class="panel-body">
            <div class="row">
              <div class="col-md-4 col-xs-4">
                <img src="__ROOT__/public/upload/<?php echo $row['image']; ?>"  width="80" />
              </div>
              
              <div class="col-md-1 col-xs-1"></div>
              <div class="col-md-2 col-xs-7">
                <p>规格：<?php echo $row['standrad'] ?>g 产地：<?php echo $row['position']; ?></p>
                <label>数量：</label>
                <select name="count">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                <div><a href="javascript:void(0)" onclick="delGoodFromCart(<?php echo $de['id']; ?>)">从购物车中移除</a></div>
              </div>
              <div class="col-md-1">
              </div>
            </div>
          </div>
        </div>
        <?php
 } endforeach; endif; ?>
        <!-- MOBILE -->
      
      <a href="javascript:void(0)" class="btn btn-primary"><span class="glyphicon glyphicon-ok"> | 去结算 </span></a>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__ROOT__/library/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__ROOT__/library/bootstrap/bootstrap.min.js"></script>
    <script src="__ROOT__/public/js/addToCart.js"></script>
    <script src="__ROOT__/public/js/sco.message.js"></script>
    <script type="text/javascript">
      var PUBLIC = "__PUBLIC__";
      var ROOT = "__ROOT__";
      var APP = "__APP__";
    </script>
  </body>
</html>