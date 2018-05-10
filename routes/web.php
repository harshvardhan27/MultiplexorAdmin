<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get( '/', 'Account\AccountController@login' )->name( "login" );

Route::group( ['prefix' => 'account'], function () {
    Route::get( 'login', [
        'uses' => 'Account\AccountController@login',
        'as' => 'login'
    ] );

    Route::post( 'login', [
        'uses' => 'Account\AccountController@postLogin',
        'as' => 'login.post'
    ] );

    Route::get( 'register', [
        'uses' => 'Account\AccountController@register',
        'as' => 'register'
    ] );

    Route::post( 'register', [
        'uses' => 'Account\AccountController@postRegister',
        'as' => 'register.post'
    ] );

    Route::post( 'logout', [
        'uses' => 'Account\AccountController@logout',
        'as' => 'logout'
    ] );
} );

Route::group( ['prefix' => 'home'], function () {
    Route::get( '/', [
        'uses' => 'Home\HomeController@index',
        'as' => 'dashboard'
    ] );
} );


Route::group( ['prefix' => 'collateral'], function () {
    Route::get( '/', [
        'uses' => 'Collateral\CollateralController@index',
        'as' => 'collateral'
    ] );

    Route::get( 'create', [
        'uses' => 'Collateral\CollateralController@create',
        'as' => 'collateral.create'
    ] );

    Route::post( 'create', [
        'uses' => 'Collateral\CollateralController@create_post',
        'as' => 'collateral.create.post'
    ] );

    Route::get( 'edit/{id}', [
        'uses' => 'Collateral\CollateralController@edit',
        'as' => 'collateral.edit'
    ] );

    Route::post( 'edit', [
        'uses' => 'Collateral\CollateralController@edit_post',
        'as' => 'collateral.edit.post'
    ] );

    Route::get( 'delete/{id}', [
        'uses' => 'Collateral\CollateralController@delete',
        'as' => 'collateral.delete'
    ] );

    Route::post( 'delete', [
        'uses' => 'Collateral\CollateralController@delete_post',
        'as' => 'collateral.delete.post'
    ] );
} );


Route::group( ['prefix' => 'kyc'], function () {
    Route::get( '/', [
        'uses' => 'Kyc\KycController@index',
        'as' => 'kyc'
    ] );

    Route::get( 'create', [
        'uses' => 'Kyc\KycController@create',
        'as' => 'kyc.create'
    ] );

    Route::post( 'create', [
        'uses' => 'Kyc\KycController@create_post',
        'as' => 'kyc.create.post'
    ] );

    Route::get( 'edit/{id}', [
        'uses' => 'Kyc\KycController@edit',
        'as' => 'kyc.edit'
    ] );

    Route::post( 'edit', [
        'uses' => 'Kyc\KycController@edit_post',
        'as' => 'kyc.edit.post'
    ] );

    Route::get( 'delete/{id}', [
        'uses' => 'Kyc\KycController@delete',
        'as' => 'kyc.delete'
    ] );

    Route::post( 'delete', [
        'uses' => 'Kyc\KycController@delete_post',
        'as' => 'kyc.delete.post'
    ] );
} );
