<?php
use Illuminate\Support\Facades\Route;



Route::group(['namespace' => 'Admin', 'middleware' => 'auth:web', 'prefix' => 'Admin'], function () {
    Route::get('/', 'HomeController@index')->name('Admin');
    Route::get('/logout', 'LoginController@logout')->name('admin.logout');

    Route::resource('PCR', 'PcrController');
    //->only(['index','update','store','edit','destroy','create'])

});

Route::group(['namespace' => 'Admin'], function () {

Route::get('viewPCR/{id}', 'PcrController@view')->name('viewPCR');
});

Route::group(['namespace' => 'Admin', 'middleware' => 'guest'], function () {




    Route::get('/', 'LoginController@login')->name('login');
    Route::post('/', 'LoginController@postLogin')->name('admin.post.login');

});


