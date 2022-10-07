<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function cart(){

        return view('cart.cart');
    }


    //to add product to cart table
    public function addToCart($id){

        //get the products from data base
        $product = Product::findorfail($id);
        
        $cartItems = session()->get('cartItems',[]);
        
        if(isset($cartItems[$id])){
            //if the product already exist increment the quantity
            $cartItems[$id]['quantity']++;
        }else{
            $cartItems[$id] = [
                "image_path" => $product->image_path,
                "name" => $product->name,
                "details" => $product->details,
                "price" => $product->price,
                "quantity" => 1
            ];

            session()->put('cartItems',$cartItems);
            return Redirect(route('shop'));  

        }
    }

    //delete the products from tha table of cart
    public function delete(Request $request){
        
        if($request->id){
             $cartItems = session()->get('cartItems');
             if(isset($cartItems[$request->id])){
                unset($cartItems[$request->id]);
                session()->put('cartItems',$cartItems);
             }
          return redirect()->back()->with('success','proudect deleted successfully');
        }
    }

    //update quantity   
    public function update(Request $request){

        if($request->id && $request->quantity){
            $cartItems = session()->get('cartItems');
            $cartItems[$request->id]["quantity"] = $request->quantity;
            session()->put('cartItem' , $cartItems);
        }
        return redirect()->back()->with('success','proudect ubdated successfully');
    }






}
