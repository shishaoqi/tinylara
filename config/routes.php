<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('/home', 'HomeController@home');

//如果使用 PHP 内置 HTTP 服务器：将导致路由的 Macaw::get('fuck' 必须写成 Macaw::get('/fuck' 才能响应。
Macaw::get('/fuck', function() {
  echo "成功！";
});

Macaw::get('(:all)', function($fu) {
  echo '未匹配到路由<br>'.$fu;
});

Macaw::$error_callback = function() {
    throw new Exception("路由无匹配项 404 Not Found");
};

Macaw::dispatch();