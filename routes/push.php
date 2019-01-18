<?php

/**
 * 推手端管理系统 路由配置
 */

Route::group(['domain' => config('domain.push_domain'), 'namespace' => 'Push'], function () {
	Route::get('/', 'IndexController@index');
});
