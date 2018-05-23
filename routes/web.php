<?php

Route::get ('/login',           'SiteController@login');
Route::post('/login',           'SiteController@login');


Auth::routes();

Route::group(['middleware' => 'auth',], function () {

    Route::get ('/',            'FormController@form');
    Route::get ('/home',        'FormController@form');
    Route::get ('/form',        'FormController@form');
    Route::get ('/form/{id}',   'FormController@edit');
    Route::post('/form/create', 'FormController@create');
    Route::post('/form/update', 'FormController@update');
    Route::get ('/list',        'FormController@lists');
    Route::post('/getlastid',   'FormController@getlastid');

    Route::get ('/logout',          'SiteController@logout');
    Route::post('/data/populate',   'SiteController@populate');

    Route::get ('/view/{id}',        'PdfController@view');
    Route::get ('/download/{id}',    'PdfController@download');

    Route::get ('/users',               'UserController@index');
    Route::get ('/user/create',         'UserController@create');
    Route::post('/user/create',         'UserController@create');
    Route::post('/user/update',         'UserController@update');
    Route::get ('/user/delete/{id}',    'UserController@delete');
    Route::get ('/user/{id}',           'UserController@show');

});








