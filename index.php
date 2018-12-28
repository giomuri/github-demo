<?php
error_reporting(E_ALL);
//set_time_limit(3200);
ini_set('session.cookie_lifetime', 0); // browser cookie deletion on browser close
ini_set('session.gc_maxlifetime', 600); // 10 minutes
ini_set('session.gc_probability', 1); // see next line...
ini_set('session.gc_divisor', 100);
// change the following paths if necessary
$yii='../yii/1_1_16/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',false);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
