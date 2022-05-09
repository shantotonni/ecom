<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $sliders = Slider::all();
        return view('frontend.home',compact('sliders'));
    }

    public function categoryProduct($slug){
        $category = Category::where('slug',$slug)->first();
        $products = Product::where('category_id',$category->id)->get();
        return view('frontend.category_product',compact('products'));
    }
}
