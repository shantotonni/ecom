<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetails;
use App\Product;
use Brian2694\Toastr\Facades\Toastr;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cartStore(Request $request){

        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->ProductId === $request->ProductId;
        });

        if ($duplicates->isNotEmpty()) {
            return response()->json(['error'=>'Item is already in your cart!']);
        }

        $product = Product::where('id',$request->ProductId)->first();

        Cart::add($product->id, $product->name, 1,20)
            ->associate('App\Product');

        return response()->json([
            'success'=>'Item Added Successfully in your cart!',
            'qty' => Cart::instance('default')->count(),
        ]);
    }

    public function cartDetails(){

        return view('frontend.cart_details');
    }

    public function orderSubmit(Request $request){

        DB::beginTransaction();
        try {
            $order = new Order();
            $order->customer_name = $request->customer_name;
            $order->contact_number = $request->contact_number;
            $order->delivery_address = $request->delivery_address;
            $order->expected_delivery_date = $request->expected_delivery_date;
            $order->expected_delivery_time = $request->expected_delivery_time;

            if ($order->save()){
                foreach(Cart::content() as $item){
                    $order_details = new OrderDetails();
                    $order_details->order_id = $order->id;
                    $order_details->product_id = $item->id;
                    $order_details->product_name = $item->name;
                    $order_details->product_code = $item->model->code;
                    $order_details->quantity = $item->qty;
                    $order_details->save();
                }

                DB::commit();
                Cart::instance('default')->destroy();
                Toastr::success('Order Successfully Completed' ,'Success');
                return redirect()->back();
            }
        }catch (\Exception $e) {
            DB::rollback();
            Session::flash('message', 'Something Went Wrong!');
            return redirect()->back();
        }
    }

    public function cartUpdate(Request $request){
        Cart::update($request->rowId, $request->quantity);
        return response()->json([
            'success'=>'Item Updated Successfully in your cart!',
            'qty' => Cart::instance('default')->count() ,
        ]);
    }

    public function cartDestroy(Request $request, $id){
        Cart::remove($id);
        return response()->json([
            'success'=>'Item Deleted Successfully in your cart!',
            'qty' => Cart::count()
        ]);
    }
}
