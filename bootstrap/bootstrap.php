<?php

define('TINYLARA_START', microtime(true));

// 定义 BASE_PATH
define('BASE_PATH', dirname(__DIR__));

// Autoload 自动载入
require BASE_PATH.'/vendor/autoload.php';

// Eloquent ORM
$capsule = new Illuminate\Database\Capsule\Manager;
$capsule->addConnection(require BASE_PATH.'/config/database.php');
$capsule->bootEloquent();

// whoops 错误提示
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$app = new shishao\Foundation\Application( realpath(__DIR__.'/../') );
//dd($app['app']);
dd($app->app);
dd($app);