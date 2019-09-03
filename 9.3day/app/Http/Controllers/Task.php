<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class Task extends Controller
{
    //
    public function reg()
    {
        return view('task.reg');
    }
    public function doreg(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:users',
            'password' => 'required',
            'phone' => 'required',
        ]);
        $model = new Users();
        $model->name = $request['name'];
        $model->nickname = rand(10000000,99999999);
        $model->password = md5($request['password']);
        $model->phone = $request['phone'];
        $res = $model->save();
        if($res){
            return $this->login();
        }else{
            return "失败";
        }
    }
    public function login()
    {
        return view('task.login');
    }
    public function dologin(Request $request)
    {
        $model = new Users();
        $res = $model->where('name',$request['name'])->where('password',md5($request['password']))->first();
        if($res){
            return $this->show();
        }else{
            return "失败";
        }
    }
    public function show(){
        return view('task.show');
    }
}
