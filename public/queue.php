<?php
// 是否开启调试模式
define("APP_DEBUG", true);

// 是否命令行
define('IS_CLI', 1);

// 是否接口模式
define('IS_API', 0);

require_once 'app.php';

$_REQUEST['c'] = $_SERVER['argv'][1];
$_REQUEST['a'] = $_SERVER['argv'][2];
$_REQUEST['v'] = 'queue';
$_REQUEST['site'] = $_SERVER['argv'][3];
$_REQUEST['appcode'] = $_SERVER['argv'][4];
$_REQUEST['queue_key'] = $_SERVER['argv'][5];
$_REQUEST['serviceversion'] = $_SERVER['argv'][6];



MrStock\MJC\Facade\App::run()->send();

