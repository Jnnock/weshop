<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>weshop::商品</title>

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
  </head>
  <body style="margin-top:84px">
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
  	<?php
 $allGoods = []; ?>
    <div class="container theFirstDivSep">
<!-- 产品介绍 缩略图 -->
		<div class="row visible-md visible-lg">
      <input type="hidden" value="<?php echo ($value); ?>" id="navId" /> 
      <div class="col-md-3">
        <div class="bs-component">
              <div class="list-group">
                <a href="__APP__/Products/index" class="list-group-item" id="list0"><b>全部分类</b></a>
                <?php
 for ($i=0; $i < count($type); $i++) { $key=key($type); echo "<a href='__APP__/Products/index?type=".$key."'class='list-group-item' id='list".$key."'><b>".$type[$key]."</b></a>"; next($type); } ?>
              </div>
          </div>
        </div> <!-- NAV -->

      <div class="col-md-1"></div>
      <div class="col-md-8">
        <div class="row"> 
          <?php if(is_array($list)): foreach($list as $key=>$list): ?><div class="col-md-6">
              <div class="well">
                <div class="row">
                  <div class="col-md-3"><img src="__ROOT__/public/upload/<?php echo ($list["image"]); ?>" width="150"></div>
                  <div class="col-md-3"></div>
                  <div class="col-md-5">
                    <p><b><a href="__APP__/Products/theProduct?good=<?php echo ($list["id"]); ?>"><?php echo ($list["name"]); ?></a></b></p>
                    <p style="width:150px;color:red;overflow: hidden;white-space: nowrap;word-break: keep-all;text-overflow: ellipsis;"><?php echo ($list["word"]); ?></p>
                    <p style="width:150px;overflow: hidden;white-space: nowrap;word-break: keep-all;text-overflow: ellipsis;">配料:<?php echo ($list["dosing"]); ?></p>
                    <p><a href="javascript:void(0)" class="btn btn-primary" onclick="addToCart(<?php echo ($list["id"]); ?>)"><span class="glyphicon glyphicon-shopping-cart"></span> ｜ 加入购物车</a></p>
                    <?php
 $allGoods[$list['id']] = array( 'name' => $list['name'], 'word' => $list['word'], 'dosing' => $list['dosing'], 'image' => $list['image'], 'price' => $list['price'], ); ?>
                  </div>
                </div>
              </div>
            </div><?php endforeach; endif; ?>
        </div>
      <?php echo ($page); ?>
      </div>

      </div>  <!-- PC ROW -->

      <div class="container visible-sm visible-xs">
        <div class="row">
          <?php
 for ($i=0; $i <count($allGoods) ; $i++) { $key = key($allGoods); ?>
              <div class="well col-xs-12">
                  <!--<div class="col-xs-3" style="margin-left:-20px"><img src="__ROOT__/public/upload/<?php echo $allGoods[$key]['image']; ?>" width="100">-->
                  <div class="col-xs-3" style="margin-left:-20px"><img src="__ROOT__/public/img/123.jpg" width="100">
                  <p style="margin-top:7px"><span class="label label-primary"><b>¥ <?php echo $allGoods[$key]['price']; ?></b></span></p>
                  </div>
                  <div class="col-xs-3"></div>
                  <div class="col-xs-5">
                    <p><b><a href="__APP__/Products/theProduct?good=<?php echo $key; ?>"><?php echo $allGoods[$key]['name']; ?></a></b></p>
                    <p style="width:120px;color:red;overflow: hidden;white-space: nowrap;word-break: keep-all;text-overflow: ellipsis;"><?php echo $allGoods[$key]['word']; ?></p>
                    <p style="width:120px;overflow: hidden;white-space: nowrap;word-break: keep-all;text-overflow: ellipsis;">配料:<?php echo $allGoods[$key]['dosing']; ?></p>
                    <p><a href="javascript:void(0)" class="btn btn-primary btn-xs" onclick="addToCart(<?php echo $key; ?>)"><span class="glyphicon glyphicon-shopping-cart"></span>｜加入购物车</a></p>
                  </div>
              </div>
          <?php
 next($allGoods); } echo $page; ?>
        </div>
      </div><!-- MOBILE ROW -->

		</div> <!-- CONTAINER -->
	


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__ROOT__/library/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__ROOT__/library/bootstrap/bootstrap.min.js"></script>
    <script src="__ROOT__/public/js/sco.message.js"></script>
    <script src="__ROOT__/public/js/addToCart.js"></script>
    <script type="text/javascript">
    var PUBLIC = "__PUBLIC__";
      var ROOT = "__ROOT__";
      var APP = "__APP__";
      var navNum = document.getElementById('navId').value;
      if (navNum == "") {
        document.getElementById('list0').className += " active";  
      }
      document.getElementById('list'+navNum).className += " active";
    </script>
  </body>
</html>