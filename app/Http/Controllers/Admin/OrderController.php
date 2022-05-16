<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList(){
        $orders = Order::latest()->get();
        return view('backend.order.index',compact('orders'));
    }

    public function contactList(){
        $contacts = Contact::latest()->get();
        return view('backend.contact.index',compact('contacts'));
    }
}
