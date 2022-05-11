<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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

    public function productDetails($id){
        $product_id = Crypt::decrypt($id);
        $product = Product::where('id',$product_id)->with('category')->first();
        return view('frontend.product_details',compact('product'));
    }
}
