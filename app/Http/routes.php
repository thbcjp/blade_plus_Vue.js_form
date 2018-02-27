<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*  デフォルトのもの これを下記のもののように書き換える
Route::get('/', function () {
    return view('welcome');
});
*/

// Route::get('/', 'MessagesController@index');


/*
// CRUD
// メッセージの個別詳細ページ表示
Route::get('messages/{id}', 'MessagesController@show');
// メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）
Route::post('messages', 'MessagesController@store');
// メッセージの更新処理（編集画面を表示するためのものではありません）
Route::put('messages/{id}', 'MessagesController@update');
// メッセージを削除
Route::delete('messages/{id}', 'MessagesController@destroy');


// index:  showの補助ページ
// 詳細ページ（show）にアクセスするためには、一覧ページ（index）が必要。
Route::get('messages', 'MessagesController@index');

// create:  新規作成用のフォームページ
// 保存アクション（store）にデータを送るには、新規作成用のフォームページ（create）が必要。
Route::get('messages/create', 'MessagesController@create');

// edit:  更新用のフォームページ
// 更新ページ（edit）にデータを送るには、更新用のフォームページ（edit）が必要。
Route::put('message/{id}/edit', 'MessagesController@edit');



Route::resource('messages', 'MessagesController');
// copy f複写機能
Route::get('messages/{id}/copy', 'MessagesController@copy');

*/

Route::get('/', 'MessagesController@index');
Route::resource('messages', 'MessagesController');