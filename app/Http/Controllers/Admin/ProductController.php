<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('created_at','desc')->with('category')->paginate(10);
        return view('backend.product.index',compact('products'));
    }

    public function create(){
        $categories = Category::all();
        return view('backend.product.create',compact('categories'));
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|min:3',
            'name_thai' => 'required',
            'description' => 'required|min:5',
            'description_thai' => 'required|min:5',
            'category_id' => 'required|numeric',
            'remarks' => 'required',
            'image' => 'required',
           // 'image_thai' => 'required',
            'code' => 'required|unique:products,code',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('product/');
            $image->move($destinationPath, $name);
        }else{
            $name = "default.png";
        }

//        if ($request->hasFile('image_thai')) {
//            $image_thai = $request->file('image_thai');
//            $name_thai = time().'.'.$image_thai->getClientOriginalExtension();
//            $destinationPath = public_path('product/');
//            $image_thai->move($destinationPath, $name_thai);
//        }else{
//            $name_thai = "default.png";
//        }

        $product               = new Product();
        $product->name         = $request->name;
        $product->name_thai         = $request->name_thai;
        $product->slug         = Str::slug($request->name);
        $product->description  = $request->description;
        $product->description_thai  = $request->description_thai;
        $product->code  = $request->code;
        $product->category_id  = $request->category_id;
        $product->remarks  = $request->remarks;
        $product->image  = $name;
       // $product->image_thai  = $name_thai;
        $product->save();

        Toastr::success('Product created successfully :)' ,'Success');
        return redirect()->route('product.list');
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('backend.product.edit',compact('product','categories'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required|min:3',
            'name_thai' => 'required',
            'description' => 'required|min:5',
            'description_thai' => 'required|min:5',
            'category_id' => 'required|numeric',
            'remarks' => 'required',
            'code' => "required|unique:products,code,$id",
        ]);

        $product = Product::find($id);

        if ($request->hasFile('image')) {

            $file_old = public_path('product/').$product->image;
            if (File::exists($file_old)) {
                unlink($file_old);
            }

            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('product/');
            $image->move($destinationPath, $name);
        }else{
            $name = $product->image;
        }

//        if ($request->hasFile('image_thai')) {
////            $file_old_thai = public_path('product/').$product->image_thai;
////            if (File::exists($file_old_thai)) {
////                unlink($file_old_thai);
////            }
//
//            $image_thai = $request->file('image_thai');
//            $name_thai = time().'.'.$image_thai->getClientOriginalExtension();
//            $destinationPath = public_path('product/');
//            $image_thai->move($destinationPath, $name_thai);
//        }else{
//            $name_thai = $product->image_thai;
//        }

        $product->name         = $request->name;
        $product->name_thai         = $request->name_thai;
        $product->slug         = Str::slug($request->name);
        $product->description  = $request->description;
        $product->description_thai  = $request->description_thai;
        $product->code  = $request->code;
        $product->category_id  = $request->category_id;
        $product->remarks  = $request->remarks;
        $product->image  = $name;
        //$product->image_thai  = $name_thai;
        $product->save();

        Toastr::success('Product Updated successfully :)' ,'Success');
        return redirect()->route('product.list');
    }
}
