<?php

namespace App\Providers;

use Slaravel\Support\Facades\Route;
use Slaravel\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

/*    public $bindings = [
        'test' =>
    ];*/

    public function register(){
        echo 'Route 服務提供者的 register'.PHP_EOL;
    }

    public function boot(){
        echo 'Route 服務提供者的 boot'.PHP_EOL;
        //获取路由文件
        Route::register($this->app->getBasePath().'/routes/routes.php');
    }

}