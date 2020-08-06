<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
#フォームを使ってみる
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');



#クエリ文字列を利用する
/*Route::get('hello', 'HelloController@index');#ルートパラメータが必要なくなる*/



#PHPテンプレートにルートパラメータから値をわたす
/*Route::get('hello/{id?}', 'HelloController@index');*/





#PHPテンプレート（コントローラを使う）
// Route::get('hello', 'HelloController@index');




#PHPテンプレート(コントローラーを使わない)
/*Route::get('hello', function(){
	return view('hello.index');
});*/




#request/response
/*Route::get('hello', 'HelloController@index');
*/



#シングルアクションコントローラのルーティング
/*Route::get('hello', 'HelloController');*/




#indexに複数アクションある際のルーティング
/*Route::get('hello', 'HelloController@index');
Route::get('hello/other', 'HelloController@other');*/
