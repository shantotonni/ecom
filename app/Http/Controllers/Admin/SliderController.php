<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::orderBy('created_at','desc')->paginate(10);
        return view('backend.slider.index',compact('sliders'));
    }

    public function create(){
        return view('backend.slider.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('slider/');
            $image->move($destinationPath, $name);
        }else{
            $name = "default.png";
        }

        $slider               = new Slider();
        $slider->name         = $request->name;
        $slider->image         = $name;
        $slider->save();

        Toastr::success('Slider created successfully :)' ,'Success');
        return redirect()->route('slider.list');
    }

    public function edit($id){
        $slider = Slider::find($id);
        return view('backend.slider.edit',compact('slider'));
    }

    public function update(Request $request, $id){

        $slider = Slider::find($id);

        if ($request->hasFile('image')) {

            //code for remove old file
            $file_old = public_path('slider/').$slider->image;
            if (File::exists($file_old)) {
                unlink($file_old);
            }

            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('slider/');
            $image->move($destinationPath, $name);
        }else{
            $name = $slider->image;
        }

        $slider->name         = $request->name;
        $slider->image         = $name;
        $slider->save();

        Toastr::success('Slider Updated successfully :)' ,'Success');
        return redirect()->route('slider.list');
    }

}
