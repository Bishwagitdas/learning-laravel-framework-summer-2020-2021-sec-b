<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        //echo "it working ....";
       return view('login.index');
    }
    public function verify(Request $req)
    {
        //echo "posted!....";
        //dd($req);
        //echo $req->uname;
        // $req->session()->put('uname', 'abc');
        // $req->session()->put('password', '1234');
        // $uname = $req->session()->get('uname');
        // $alldata = $req->session()->all();

        // $req->session()->forget('password');
        // $req->session()->flush();

        // $uname = $req->session()->pull('uname');
        // $req->session()->has('uname');

        // $req->session()->flash('cgpa', '4');
        // $req->session()->flash('dept', 'SE');
        // $cgpa = $req->session()->get('cgpa');
        // $req->session()->keep('cgpa');
        // $req->session()->reflash();

        if($req->uname == $req->password){
            $req->session()->put('uname', $req->uname);
            return redirect('/home');
        }else{
            $req->session()->flash('msg', 'invaild username or password');
            return redirect('/login');
        }
         
    }
}
