<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Produit;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Session;


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

static function cartItem()
{
 $userId=Session::get('user')['id'];
 return Cart::where('user_id',$userId)->count();
}
function cartList()
    {
        $userId=Session::get('user')['id'];
       $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }
function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function ordernow(){
        $userId=Session::get('user')['id'];
        $total= $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.price');
 
         return view('ordernow',['total'=>$total]);
    }
    function orderplace(Request $req){
        $userId=Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete(); 
        }
        $req->input();
        return redirect('/');
   }
   function myorders(){
    $userId=Session::get('user')['id'];
 $orders= DB::table('orders')
     ->join('products','orders.product_id','=','products.id')
     ->where('orders.user_id',$userId)
     ->get();

     return view('myorders',['orders'=>$orders]);

   }
   function removeProduct($id){
    
    Produit::destroy($id);
     Product::destroy($id);

    $data= Produit::all();
    return view('/dashboard.index',['products'=>$data]);
   }
   function insert($id){
    $data= Produit::find($id); 
    $product= new Product;
    $product->id=$id;
    $product->name=$data->name;
    $product->price=$data->price;
    $product->description=$data->description;
    $product->category=$data->category;
    $product->gallery=$data->gallery;
    $product->save();
    $data= Produit::all();
    return view('/dashboard.index',['products'=>$data]);
    

   }
   function update($id){
    $data =Produit::find($id);
       return view('/update',['products'=>$data]);
   }
   function valide($id,Request $req){
    $produit= Produit::find($id) ;
    $produit->name=$req->name;
    $produit->price=$req->price;
    $produit->description=$req->description;
    $produit->category=$req->category;
    $produit->save();
    $product=Product::find($id);
    $product->name=$produit->name;
    $product->price=$produit->price;
    $product->description=$produit->description;
    $product->category=$produit->category;
    $product->save();
$data=Produit::all();
return view('/dashboard.index',['products'=>$data]);
   }
   function search(Request $req)
   {
       $data= Product::
       where('name', 'like', '%'.$req->input('query').'%')
       ->get();
       return view('search',['products'=>$data]);
   }
}
