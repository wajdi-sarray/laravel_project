<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public   function  index()
    {
        $data= Product::all();
    return view('product',['products'=>$data]);
}
function detail($id)
{
    $data =Product::find($id);
    return view('detail',['product'=>$data]);
}
function add_cart(Request $req){
    if($req->session()->has('user'))
    {
       $cart= new Cart;
       $cart->user_id=$req->session()->get('user')['id'];
       $cart->product_id=$req->product_id;
       $cart->save();
       return redirect('/');

    }
    else
    {
        return redirect('/login');
    }
}
function cartlist()
{
  
   $products= DB::table('cart')
    ->join('products','cart.product_id','=','products.id')
    
    ->select('products.*','cart.id as cart_id')
    ->get();

    return view('cartlist',['products'=>$products]);
}
function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    
}
