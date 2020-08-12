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
#モデルのリレーション
Route::get('board', 'BoardController@index');
Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');




#エロクエントを使う
Route::get('person', 'PersonController@index');
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@serch');
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');




#クエリビルダを使う
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');
Route::get('hello/show', 'HelloController@show');




#insertによるレコード作成,updateによるレコード更新,deleteによるレコード削除
/*Route::get('hello', 'HelloController@index');
#redirectがpost処理のためpostのためのrouteが必要
Route::post('hello', 'HelloController@post');
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');*/



#フォームを使ってみる
/*Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');*/



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
