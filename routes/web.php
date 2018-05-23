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

//用户模块
//注册页面
Route::get('/register','\App\Http\Controllers\RegisterController@index');
//注册行为
Route::post('/register','\App\Http\Controllers\RegisterController@index');
//登录页面
Route::get('/login','\App\Http\Controllers\LoginController@index');
//登录行为
Route::post('/login','\App\Http\Controllers\LoginController@index');
//登出行为
Route::get('/Logout','\App\Http\Controllers\LoginController@logout');

//个人设置页面
Route::get('/user/me/setting','\App\Http\Controllers\UserController@setting');

//个人设置操作
Route::get('/user/me/setting','\App\Http\Controllers\UserController@settingStore');

//文章列表页面
Route::get('/posts','\App\Http\Controllers\PostController@index');

//创建文章
Route::get('/posts/create','\App\Http\Controllers\PostController@create');
Route::post('/posts','\App\Http\Controllers\PostController@store');

//文章详情页面
Route::get('/posts/{post}','\App\Http\Controllers\PostController@show');

//编辑文章
Route::get('/posts/{post}/edit','\App\Http\Controllers\PostController@edit');
//更新文章
Route::put('/posts/{post}','\App\Http\Controllers\PostController@update');
//删除文章
Route::put('/posts/delete','\App\Http\Controllers\PostController@delete');



// Route::get('base', function () {
//     return ('hello word ');
// });

// Route::get('index/{id}',function($id){
// 	return 'index-'.$id;
// })->where('id','[0-9]+');

// Route::get('info/{id}/{name?}',function($id,$name='xiewen'){
// 	return 'info-id->'.$id."-name->".$name;
// })->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

// Route::match(['get','post'],'name',function(){
// 	return 'name';
// });

// Route::get('user/{id?}/{name?}', function ($id= null, $name=null) {

// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Route::get('user/{id}', function ($id) {
//    return 'id->'.$id;
// });

// Route::group(['prefix'=>'member'],function(){
// 	Route::get('user/center',[	'as'=>'center',function(){
// 		return  route('center');
// 	}]);
// 	Route::any('sund',function(){
// 		return 'sund';
// 	});
// });

//Route::get('member/info','MemberController@info');

// Route::group(['namespace'=>'app'],function(){
//
//   Route::group(['namespace' => 'Controllers'], function(){
//       // 控制器在 "App\Http\Controllers\Admin\User" 命名空间下
//   });
// });


//Route::get('member/info','MemberController@info');


//Route::any('member/info',['uses'=>'MemberController@info']);


Route::any('member/{id}',[
  'uses'=>'MemberController@info',
  'as'=>'memberinfo'
])->where('id','[0-9]+');
