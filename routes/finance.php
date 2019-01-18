<?php

/**
 * 财务端 路由配置
 */

Route::group(['domain' => config('domain.finance_domain'), 'namespace' => 'Finance'], function () {
	Route::get('/', 'IndexController@index');
});
