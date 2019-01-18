<?php

/**
 * 微信端 路由配置
 */

Route::group(['domain' => config('domain.wechat_domain'), 'namespace' => 'Wechat'], function () {
	Route::get('/', 'WechatController@index');
});
