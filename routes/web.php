<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",function() {
    return redirect()->route("catalog.view");
});
Route::get("/login", [AuthController::class , "loginView"])->name("login");
Route::post("/login", [AuthController::class,"loginPost"])->name("login.post");

Route::prefix("app")->group(function() {

   Route::controller(CustomerController::class)->group(function() {
       Route::prefix("customer")->group(function() {
            Route::prefix("catalog")->group(function() {
                Route::get("/", "catalogView")->name("catalog.view");
                Route::get("{productId}", "catalogDetailView")->name("catalog.view.detail");
            }); 

            Route::prefix("cart-items")->group(function() {
                Route::get("/", "cartItemsView")->name("cart.items");
            });
       });
   });
   Route::middleware("auth")->group(function() {
       Route::post("logout", [AuthController::class,"logout"])->name("logout");
       Route::controller(SellerController::class)->group(function() {
           Route::prefix("seller")->group(function() {
                Route::get("home", "homeView")->name("seller.home");
                Route::prefix("product")->group(function() {
                    Route::get("/","productList")->name("seller.product");
                    Route::get("/create","createProductView")->name("seller.product.create");
                    Route::get("/detail/{productId}","detailProductView")->name("seller.product.detail");
                });
    
                Route::prefix("order")->group(function() {
                    Route::get("/", "orderView")->name("seller.order");
                    Route::get("{orderId}", "orderDetailView")->name("seller.order.detail");
                });
    
                Route::prefix("profile")->group(function() {
                    Route::get("/", "profileView")->name("seller.profile.view");
                });
           });
       });
   });
});



