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
use App\Http\Controllers\Api\PartnerController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\Setting\CategoryController;
use App\Http\Controllers\Api\Category\FoodController;
use App\Http\Controllers\Api\Menus\AchieveController;
use App\Http\Controllers\Api\Menus\CommitmentController;
use App\Http\Controllers\Api\Menus\CareerController;
use App\Http\Controllers\Api\Menus\ContactController;
use App\Http\Controllers\Api\Category\PlasticController;
use App\Http\Controllers\Api\Category\TextileController;
use App\Http\Controllers\Api\Category\HospitalityController;
use App\Http\Controllers\Api\Category\InfrustructureController;
use App\Http\Controllers\Api\Category\RealestateController;
use App\Http\Controllers\Api\Category\MediaController;
use App\Http\Controllers\Api\BredcrumbsController;


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

    // Start Backend Area
    // For Backend

    // Bredcrumbs routes
    Route::get('getBredcrumbs', 'Api\BredcrumbsController@GetBredcrumbs');

    // About us content one routes
    Route::post('aboutusOne', 'Api\AboutUsController@AboutusOne');

     // Menu routes
     Route::post('getMenu', 'Api\MenuController@GetMenu');

    //footer image routes
    Route::post('footerimage', 'Api\FooterController@storeFooterImage');

    // Start Frontend Area
    // For Frontend 
    Route::get('getMenuFront', 'Api\MenuController@GetMenuFront');

    // For Business Category 
    Route::get('getCategory', 'Api\Category\MediaController@GetCategory');

    
    // about us for home documents
    Route::get('getAboutus', 'Api\AboutUsController@GetAboutus');
    // About us content one 
    Route::get('getAboutusOne', 'Api\AboutUsController@GetAboutusOne');

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

    //Achievements For menu 
    Route::get('getAchieve', 'Api\Menus\AchieveController@GetAchieve');
    //Achievements Details For menu
    Route::get('getAchieveDetails', 'Api\Menus\AchieveController@GetAchieveDetails');

    //Commitments For menu 
    Route::get('getCommit', 'Api\Menus\CommitmentController@GetCommit');

    //Career For menu 
    Route::get('getCareer', 'Api\Menus\CareerController@GetCareer');
    Route::get('getJobs', 'Api\Menus\CareerController@GetJobs');

    //Contact Us For menu 
    Route::get('getContact', 'Api\Menus\ContactController@GetContact');

    // partner documents
    Route::get('getPartner', 'Api\PartnerController@GetPartner');

    // For Menu items
    // news and events documents
     Route::get('getNews', 'Api\NewsController@GetNews');
    // news and events details documents
    Route::get('getNewsDetails', 'Api\NewsController@GetNewsDetails');

    // Get Category By Lang
    Route::get('getCategoryByLang', 'Api\Setting\CategoryController@GetCategoryByLang');

    // Get Food 
    Route::get('getFood', 'Api\Category\FoodController@GetFood');

    // Get Plastic 
    Route::get('getPlastic', 'Api\Category\PlasticController@GetPlastic');

    // Get Textile 
    Route::get('getTextile', 'Api\Category\TextileController@GetTextile');

    // Get Hospitality 
    Route::get('getHospitality', 'Api\Category\HospitalityController@GetHospitality');

    // Get Infrustructure 
    Route::get('getInfrustructure', 'Api\Category\InfrustructureController@GetInfrustructure');

    // Get Real Estate 
    Route::get('getRealestate', 'Api\Category\RealestateController@GetRealestate');

    // Get Media 
    Route::get('getMedia', 'Api\Category\MediaController@GetMedia');

    
    // Footer
    Route::get('getFooter', 'Api\FooterController@GetFooter');

});

// Bredcrumbs Area
Route::apiResource('bredcrumbs', BredcrumbsController::class);

// Menu Area
Route::apiResource('menu', MenuController::class);

// News and Events Area
Route::apiResource('news', NewsController::class);

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

// Partner Area
Route::apiResource('partner', PartnerController::class);

// Achievement Area
Route::apiResource('achievement', AchievementController::class);

// Commitment Area
Route::apiResource('commitment', CommitmentController::class);

//Menu Achievement Area
Route::apiResource('achieve', AchieveController::class);

//Menu Achievement Area
Route::apiResource('career', CareerController::class);

// Investor Area
Route::apiResource('investor', InvestorController::class);

// Contact Us Area
Route::apiResource('contactus', ContactController::class);

// Tab Area
Route::apiResource('tab', TabController::class);

// Service Area
Route::apiResource('service', ServiceController::class);

// For Category from menu
// Food Processing Area
Route::apiResource('food', FoodController::class);

// Plastic Area
Route::apiResource('plastic', PlasticController::class);

// Textile Area
Route::apiResource('textile', TextileController::class);

// Hospitality Area
Route::apiResource('hospitality', HospitalityController::class);

// Infrustructure Area
Route::apiResource('infrustructure', InfrustructureController::class);

// Real Estate Area
Route::apiResource('realestate', RealestateController::class);

// Media Area
Route::apiResource('media', MediaController::class);



// Footer Area
Route::apiResource('footer', FooterController::class);

// Setting Area
Route::apiResource('category', CategoryController::class);


