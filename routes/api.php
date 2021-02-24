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
use App\Http\Controllers\Api\AchievementController;
use App\Http\Controllers\Api\ProfitController;
use App\Http\Controllers\Api\CounterController;
use App\Http\Controllers\Api\ExportController;


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
    
    // about us for home documents
    Route::get('getAboutus', 'Api\AboutUsController@GetAboutus');

    // about us documents
    Route::post('getDocuments', 'Api\AboutUsController@GetDocuments');

    // Counter documents
    Route::get('getCounter', 'Api\CounterController@GetCounter');

    // Profit Share documents
    Route::get('getProfit', 'Api\ProfitController@GetProfit');

    // Export Markets documents
    Route::get('getExport', 'Api\ExportController@GetExport');

    // achievements 
    Route::post('getAchievements', 'Api\AchievementController@GetAchievements');
});

// Menu Area
Route::apiResource('menu', MenuController::class);

// Home Area
Route::apiResource('home', HomeController::class);

// Profit Sharing Area
Route::apiResource('profit', ProfitController::class);

// Profit Sharing Area
Route::apiResource('profit', ProfitController::class);

// Export Market Area
Route::apiResource('export', ExportController::class);

// Counter Area
Route::apiResource('counter', CounterController::class);

// Achievement Area
Route::apiResource('achievement', AchievementController::class);

// Investor Area
Route::apiResource('investor', InvestorController::class);

// Tab Area
Route::apiResource('tab', TabController::class);

// Service Area
Route::apiResource('service', ServiceController::class);

// Footer Area
Route::apiResource('footer', FooterController::class);


