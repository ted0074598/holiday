<?php
	error_reporting(0);

	define('ROOT_PATH', dirname(__FILE__));
	define('DB_HOST', 'localhost'); //数据库服务器地址
	define('DB_USER', 'root');  //数据库用户名
	define('DB_PWD', '');//数据库密码
	define('DB_NAME', 'dedecmsv57utf8sp1');  //数据库名称
	define('DB_PORT', '3306');  //数据库端口
	function __autoload($className) {
    require_once ROOT_PATH . '/public/'. ucfirst($className) .'.class.php'; //自动加载 class 文件
	}		



			$link = mysqli_connect("localhost","root","","dedecmsv57utf8sp1") or die("Error " . mysqli_error($link));
			//consultation:
			//execute the query.
			$link->query("SET character_set_client='utf8'");
			$link->query("SET character_set_connection='utf8'");
			$link->query("SET character_set_results='utf8'");
			date_default_timezone_set('PRC'); //设置本地时区
?>