<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\TabController;
use App\Http\Controllers\Api\AboutUsController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\FooterController;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\InvestorController;


Route::group([
    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    //'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('user-profile', 'AuthController@userProfile');

    // Menu routes
    Route::post('getMenu', 'Api\MenuController@GetMenu');
    //Route::get('getMenuForLang', 'Api\MenuController@GetMenuForLang');
    //footer image routes
    Route::post('footerimage', 'Api\FooterController@storeFooterImage');

    // For Frontend
    Route::get('getMenuFront', 'Api\MenuController@GetMenuFront');
    // about us-documents
    Route::post('getDocuments', 'Api\AboutUsController@getDocuments');
});

// Menu Area
Route::apiResource('menu', MenuController::class);

// Home Area
Route::apiResource('home', HomeController::class);

// About us Area
Route::apiResource('aboutus', AboutUsController::class);

// Investor Area
Route::apiResource('investor', InvestorController::class);

// Tab Area
Route::apiResource('tab', TabController::class);

// Service Area
Route::apiResource('service', ServiceController::class);

// Footer Area
Route::apiResource('footer', FooterController::class);


