<?php

/**
 * 商家端管理系统 路由配置
 */

Route::group(['domain' => config('domain.seller_domain'), 'namespace' => 'Seller'], function () {
	Route::get('/', 'IndexController@index');
});
