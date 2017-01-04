<?php
/**
* \HomeController
*/
use shishao\Container\Container;

class HomeController extends BaseController
{
    /*public function home() {
        $article = Article::first();
        require dirname(__FILE__).'/../views/home.php';
    }*/

    public function home() {
        $container = new Container();
        dd($container);
        //$this->view = View::make('home')->with('article',Article::first())->withTitle('MFFC :-D')->withFuckMe('OK!');
    }
}