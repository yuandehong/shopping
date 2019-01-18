<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();//api

        $this->mapWebRoutes();//pc前端

        $this->mapWechatRoutes();//微信
        
        $this->mapBackendRoutes();//管理系统

        $this->mapSellerRoutes();//商家

        $this->mapPushRoutes();//推手

        $this->mapFinanceRoutes();//财务
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    /**
     * [mapWechatRoutes 微信路由组]
     * @Author    Yman
     * @DateTime  2019-01-18
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [description]
     */
    protected function mapWechatRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/wechat.php'));
    }

    /**
     * [mapBackendRoutes 系统后台路由组]
     * @Author    Yman
     * @DateTime  2019-01-18
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [description]
     */
    protected function mapBackendRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/backend.php'));
    }

    /**
     * [mapSellerRoutes 商家端路由]
     * @Author    Yman
     * @DateTime  2019-01-18
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [description]
     */
    protected function mapSellerRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/seller.php'));
    }

    /**
     * [mapPushRoutes 推手端]
     * @Author    Yman
     * @DateTime  2019-01-18
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [description]
     */
    protected function mapPushRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/push.php'));
    }

    /**
     * [mapFinanceRoutes 财务端]
     * @Author    Yman
     * @DateTime  2019-01-18
     * @copyright [copyright]
     * @license   [license]
     * @version   [version]
     * @return    [type]      [description]
     */
    protected function mapFinanceRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/finance.php'));
    }
}
