<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function catalogView() {
        return view("app.dashboard.customer.catalog");
    }

    function catalogDetailView() {
        return view("app.dashboard.customer.detail-catalog");
    }
}
