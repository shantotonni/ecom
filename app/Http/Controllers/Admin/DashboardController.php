<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $total_product = Product::count();
        $total_order = Order::count();
        return view('backend.dashboard',compact('total_order','total_product'));
    }
}
