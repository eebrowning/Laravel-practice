<?php

use Illuminate\Support\Facades\Route;

//testing custom controller for JSON files
// use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ComponentController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;


// Route::get("/catalog", [TestController::class, "index"]);
Route::get("/", [HomeController::class, "index"]);
//read about blades and how to nest them. not sure, but that may help.
Route::get("/catalog", [CatalogController::class, "index"]);
Route::get('/catalog/{itemId}', [ProductController::class, "index"])->where('itemId','.+');

Route::get('/404', function () {
    return view('Error404');
});


// Route::get('/', function () {
//     return view('HomePage');
// });
// Route::get('/catalog', function () {
//     // $data = [TestController::class, "index"];
//     return view('ProductCatalog',['data'=>TestController::class]);
// });
// Route::get('/catalog/itemId', function () {
//     return view('./Product/ProductPage');
// });

// Build a simple Laravel app that renders pages with data from JSON files.
// There are four page types: HomePage, ProductCatalog, ProductPage, and Error404. 
//Each page type follows a schema that determines the structure of the JSON object.
