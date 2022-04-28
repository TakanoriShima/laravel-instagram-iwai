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

// Route::get('/', function () {
//     return view('welcome');
// });

// 一般ユーザー
Route::group(['middleware' => ['guest']], function () {
    
    // プレビューした瞬間の設定
    Route::get('/', 'ToppagesController@index');
    
    // ログイン認証系
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login')->name('login.post');
    
    // ユーザー登録系
    Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
    Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

});

// ユーザー認証必要
Route::group(['middleware' => ['auth']], function () {
    
    // ログイン後のリダイレクト先
    Route::get('/top', 'PostsController@index');
    
    // ログアウト
    Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
    
    // ユーザー一覧、詳細表示
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    
    // プロフィール関係
    Route::resource('profiles', 'ProfilesController');
    
    // 画像投稿関係
    Route::resource('posts', 'PostsController');
    
    // ネスト(あるコントローラーのルーティング内に、別のコントローラーのルーティングを記述)
    // ref) https://qiita.com/ntm718/items/95eee03f5294d0c351b0
    Route::group(['prefix' => 'posts/{id}'], function () {
       // 投稿に関するコメント
       Route::post('comment', 'CommentsController@store')->name('comments.store');
       
       // いいね系
        Route::post('favorite', 'FavoritesController@store')->name('posts.favorite');
        Route::delete('unfavorite', 'FavoritesController@destroy')->name('posts.unfavorite');
    });

});
