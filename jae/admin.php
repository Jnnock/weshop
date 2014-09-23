<?php
header("content-type:text/html;charset=utf-8");

define("APP_NAME", "weshop");
define("APP_PATH", "application/admin/");
define("__ROOT__", "http://shopfresh.jd-app.com/");//注意：加斜杠

define('APP_DEBUG', true);

include_once 'library/ThinkPHP/ThinkPHP.php';
?>