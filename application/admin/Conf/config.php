<?php
return array(
	/* 项目设定 */
	'APP_DEBUG' => true, // 是否开启调试模式

	/* 默认设定 */
	'DEFAULT_MODULE'   => 'Index', // 默认模块名称
	'DEFAULT_ACTION'   => 'login', // 默认操作名称
	'DEFAULT_CHARSET'  => 'utf-8', // 默认输出编码
	'DEFAULT_TIMEZONE' => 'PRC', // 默认时区
	'DEFAULT_THEME'    => 'admin', // 默认模板主题名称

	/* 数据库设置 */
	'DB_TYPE'            => 'mysql', // 数据库类型
	'DB_HOST'            => '127.0.0.1', // 服务器地址
	'DB_NAME'            => 'weshop', // 数据库名
	'DB_USER'            => 'root', // 用户名
	'DB_PWD'             => 'liu1feng', // 密码
	'DB_PORT'            => 3306, // 端口
	'DB_PREFIX'          => '', // 数据库表前缀
	'DB_SUFFIX'          => '', // 数据库表后缀
	'DB_FIELDTYPE_CHECK' => false, // 是否进行字段类型检查
	'DB_FIELDS_CACHE'    => true, // 启用字段缓存
	'DB_CHARSET'         => 'utf8', // 数据库编码默认采用utf8
	'DB_DEPLOY_TYPE'     => 0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
	'DB_RW_SEPARATE'     => false, // 数据库读写是否分离 主从式有效

	/* 分页设置 */
	'PAGE_ROLLPAGE' => 5, // 分页显示页数
	'PAGE_LISTROWS' => 20, // 分页每页显示记录数

	/* 模板引擎设置 */
	'TMPL_ACTION_ERROR'   => 'Public:error', // 默认错误跳转对应的模板文件
	'TMPL_ACTION_SUCCESS' => 'Public:success', // 默认成功跳转对应的模板文件
	// Think模板引擎标签库相关设定
	'TAGLIB_BEGIN' => '<', // 标签库标签开始标记
	'TAGLIB_END'   => '>', // 标签库标签结束标记

	/* 表单令牌验证 */
	'TOKEN_ON'   => true, // 开启令牌验证
	'TOKEN_NAME' => '__hash__', // 令牌验证的表单隐藏字段名称
	'TOKEN_TYPE' => 'md5', // 令牌验证哈希规则

	/* URL设置 */
	'URL_MODEL' => 1, // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
	// 0 (普通模式);
	//1(PATHINFO模式);
	//2(REWRITE模式);
	//3(兼容模式)当URL_DISPATCH_ON开启后有效;
	//默认为PATHINFO模式，提供最好的用户体验和SEO支持
	'URL_PATHINFO_MODEL' => 2, // PATHINFO 模式,使用数字1、2、3代表以下三种模式:
	// 1 普通模式(参数没有顺序,例如/m/module/a/action/id/1);
	// 2 智能模式(系统默认使用的模式，可自动识别模块和操作/module/action/id/1/ 或者 /module,action,id,1/...);
	// 3 兼容模式(通过一个GET变量将PATHINFO传递给dispather，默认为s index.php?s=/module/action/id/1)
	'URL_PATHINFO_DEPR' => '/', // PATHINFO模式下，各参数之间的分割符号
	'URL_HTML_SUFFIX'   => '.html', // URL伪静态后缀设置

	/* 系统变量名称设置 */
	'VAR_MODULE' => 'm', // 默认模块获取变量
	'VAR_ACTION' => 'a', // 默认操作获取变量

);
?>