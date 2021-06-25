<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // $users = [
        //     [1, 'bishwagit', 'bishwagit@gmail.com'],
        //     [2, 'abc', 'abc@gmail.com'],
        //     [3, 'xyz', 'xyz@gmail.com']
        // ];
        // return view('user.list')->with('userList', $users);
        // $users = [
        //     ['id'=>1, 'name'=>'bishwagit', 'email'=>'bishwagit@gmail.com'],
        //     ['id'=>2, 'name'=>'abc', 'email'=>'abc@gmail.com'],
        //     ['id'=>3, 'name'=>'xyz', 'email'=>'xyz@gmail.com']
        // ];
        $users = $this->getUserList();
        return view('user.list')->with('userList', $users);
    }
    public function details($id){
        //echo $id;
        $users = $this->getUserList();
        $user = '';

        foreach($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }
        return view('user.details')->with('user', $user);
    }
    public function create()
    {
        return view('user.create');
    }
    public function insert(Request $req)
    {
        $users = $this->getUserList();
        $user = ['id'=>$req->id, 'name'=>$req->uname, 'email'=>$req->email];
        array_push($users, $user);
        
        //return view('user.create');
        return view('user.list')->with('userList', $users);
    }

    public function edit($id){
        $users = $this->getUserList();
        array_search(abc, $users);
        return view('user.edit')->with('user', $user);
        //return dd($user);
    }
    public function update(Request $req, $id){
        
        return view('user.list')->with('userList', $users);
        
    }
    public function delete($id){
        
        return view('user.delete')->with('user', $user);
        
    }
    public function destroy($id){
        
        return view('user.list')->with('userList', $users);
        
    }
    public function getUserList(){
        return [
            ['id'=>1, 'name'=>'bishwagit', 'email'=>'bishwagit@gmail.com'],
            ['id'=>2, 'name'=>'abc', 'email'=>'abc@gmail.com'],
            ['id'=>3, 'name'=>'xyz', 'email'=>'xyz@gmail.com']
        ];
    }
}
