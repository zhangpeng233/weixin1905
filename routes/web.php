<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $file_name = "abc.mp3";
    $info = pathinfo($file_name);
    echo $file_name . '的文件扩展名为000 : ' . pathinfo($file_name)['extension'];die;
    echo '<pre>';print_r($info);echo '</pre>';die;
    return view('welcome');
});


Route::get('/sd', function () {
    echo 234;
});

Route::get('/info', function () {
   phpinfo();
});

Route::get('/test/hello','Test\TestController@hello');
Route::get('/test/adduser','User\LoginController@addUser');
Route::get('/test/redis1','Test\TestController@redis1');
Route::get('/test/redis2','Test\TestController@redis2');
Route::get('/test/xml','Test\TestController@xmlTest');
Route::get('/test/baidu','Test\TestController@baidu');
//微信开发
Route::get('/wx/test','WeiXin\WxController@test');
Route::get('/wx','WeiXin\WxController@wechat');
Route::post('/wx','WeiXin\WxController@receiv');        //接收微信的推送事件
Route::get('/wx/media','WeiXin\WxController@getMedia');        //获取临时素材
Route::get('/wx/flush/access_token','WeiXin\WxController@flushAccessToken');        //刷新access_token
