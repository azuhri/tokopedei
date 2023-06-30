<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    function homeView() {
        return view("app.dashboard.seller.home");
    }

    function productList() {
        return view("app.dashboard.seller.product");
    }

    function createProductView() {
        return view("app.dashboard.seller.create-product");
    }

    function detailProductView(Request $request, $id) {
        return view("app.dashboard.seller.detail-product");
    }

    function profileView() {
        return view("app.dashboard.seller.profile");
    }
    
    function orderView() {
        return view("app.dashboard.seller.pesanan");
    }

    function orderDetailView() {
        return view("app.dashboard.seller.detail-pesanan");
    }
}
