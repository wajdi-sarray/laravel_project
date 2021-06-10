<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produit;


class UserController extends Controller
{
    function login(Request $req){
     $user= User::where(['email'=>$req->email])->first() ;
     if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            
            $req->session()->put('user',$user);
            if($req->session()->get('user')['role']==1){
                $data= Produit::all();
                return view('/dashboard.index',['products'=>$data]);
                
            }
            
            return redirect('/');
        }
    }
    function register(Request $req){
        $user= new User();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
      return   redirect("/login");
//return $req->input();
    }
}
