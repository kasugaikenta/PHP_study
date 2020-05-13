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

//①リスト一覧画面
Route::get('/','ListingsController@index');

//②リスト新規画面
Route::get('/new', 'ListingsController@new')->name('new');

//③リスト新規作成処理
Route::post('/listings','ListingsController@store');

//リスト編集画面
Route::get('/listingsedit/{id}','ListingsController@edit');

//リスト更新処理
Route::post('/listing/edit','ListingsController@update');

//リスト削除処理
Route::get('/listingsdelete/{id}','ListingsController@destory');

//カードの新規作成
Route::get('/listing/{id}/card/new', 'CardsController@new');

//カードの新規作成処理
Route::post('/cards','CardsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
