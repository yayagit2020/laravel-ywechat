<?php

namespace Yaya\LaravelWechat\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class WechatServiceProvider extends ServiceProvider
{
	# register 先执行一般是配置
    public function register()
    {

    }
    # 后执行
    public function boot()
    {
    	$this->registerRoutes();
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Yaya\LaravelWechat\Http\Controllers',
            'prefix' => 'swechat',
        ];
    }
    
    private function registerRoutes()
    {
    	Route::group($this->routeConfiguration(), function ($value='')
    	{
    		$this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
    	});
    }
}
