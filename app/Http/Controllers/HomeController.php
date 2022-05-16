<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Order;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home(){
        $sliders = Slider::all();
        return view('frontend.home',compact('sliders'));
    }

    public function categoryProduct($slug){
        $category = Category::where('slug',$slug)->first();
        $products = Product::where('category_id',$category->id)->with('category')->get();
        return view('frontend.category_product',compact('products','category'));
    }

    public function productDetails($slug){
        $product = Product::where('slug',$slug)->with('category')->first();
        return view('frontend.product_details',compact('product'));
    }

    public function contactUs(){
        return view('frontend.contact_us');
    }

    public function contactStore(Request $request){

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->mobile = $request->mobile;
        $contact->address = $request->address;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back();
    }

    public function order(){
        return view('frontend.order');
    }

    public function orderStore(Request $request){

        $order = new Order();
        $order->customer_name = $request->customer_name;
        $order->contact_number = $request->contact_number;
        $order->product_code = $request->product_code;
        $order->quantity = $request->quantity;
        $order->delivery_address = $request->delivery_address;
        $order->expected_delivery_date = $request->expected_delivery_date;
        $order->expected_delivery_time = $request->expected_delivery_time;
        $order->save();
        Session::flash('message', 'Successfully Submitted!');
        return redirect()->back();
    }
}
