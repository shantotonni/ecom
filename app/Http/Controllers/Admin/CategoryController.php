<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::orderBy('created_at','desc')->paginate(10);
        return view('backend.category.index',compact('categories'));
    }

    public function create(){
        return view('backend.category.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|min:3|unique:categories,name',
            'description' => 'required|min:5',
        ]);

        $category               = new Category();
        $category->name         = $request->name;
        $category->slug         = Str::slug($request->name);
        $category->description  = $request->description;
        $category->save();

        Toastr::success('Category created successfully :)' ,'Success');
        return redirect()->route('category.index');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('backend.category.edit',compact('category'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => "required|min:3|unique:categories,name,$id",
            'description' => 'required|min:5',
        ]);

        $category = Category::find($id);
        $category->name         = $request->name;
        $category->slug         = Str::slug($request->name);
        $category->description  = $request->description;
        $category->save();

        Toastr::success('Category Updated successfully :)' ,'Success');
        return redirect()->route('category.index');
    }

}
