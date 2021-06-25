<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req){
        //echo "wellcom home!";
        // $name = 'Bishwagit';
        // $id = '1234';
        // return view('home.index', compact('name','id'));
        //return view('home.index', ['name'=>'Bishwagit','id'=>'12345']);
        // return view('home.index')
        //        ->with('id', '123')
        //        ->with('name', 'Bishwagit Das');

        if($req->session()->has('uname'))
        {
         return view('home.index')
               ->withId('12')
               ->withName('Bishwagit Das');
    
        }
        else{
            $req->session()->flash('msg', 'Invalid request');
            return redirect('/login');
        }       

    }
}
