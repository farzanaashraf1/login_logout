<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function UserLogin(Request $req)
    {
      $data =  $req->input('name');
      $req->session()->put('ali',$data);
      return redirect('profile');
    }
}
