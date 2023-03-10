<?php

use Illuminate\Support\Facades\Route;

//testing custom controller for JSON files
// use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ComponentController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ErrorController;



// Route::get("/catalog", [TestController::class, "index"]);
Route::get("/", [HomeController::class, "index"]);
//read about blades and how to nest them. not sure, but that may help.
Route::get("/collections/all/catalog", [CatalogController::class, "index"]);
Route::get('/catalog/{itemId}', [ProductController::class, "index"])->where('itemId','.+');

Route::any('{any}', [ErrorController::class, "index"])->where('any', '.*');


// Build a simple Laravel app that renders pages with data from JSON files.
// There are four page types: HomePage, ProductCatalog, ProductPage, and Error404. 
//Each page type follows a schema that determines the structure of the JSON object.
