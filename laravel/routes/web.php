<?php

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ShopController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'] );
route::prefix('shop')->group(function () {
    route::get('/product/{id}',[ShopController::class,'show']);
    route::get('/', [ShopController::class, 'index']);
});
 

