<?php

/**
 * 后台管理系统 路由配置
 */

Route::group(['domain' => config('domain.backend_domain'), 'namespace' => 'Backend'], function () {
	Route::get('/', 'IndexController@index');
});
