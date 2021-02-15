<?php

namespace App\Http\Controllers;
use DB;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //获取一个添加页面
    public function add()
    {
        return view('user');
    }
    /** 
    *执行用户添加操作
    * @param 提交的表单数据
    * @return 返回添加是否成功
    */
    public function store(Request $request)
    {
        // 1.获取客户端提交的表单数据
        $input  = $request->except('_token');
        
        $input['password'] = md5($input['password']);
       $ref = User::create(['username'=> $input['username'],'password'=>$input['password']] );
        //$ref = dd($input);
       if($ref)
       {
           return redirect('user/index');
       }
       else
       {
           return view('welcome');
       }
    }


    public function index()
    {
        $user = User::get();
        return view('user_list',['user'=>$user]);
    }

    public function edit($id)
    {
        //根据要修改的用户id，找到修改用户
        $user = User::find($id);
        return view('edit',['user'=>$user]);
    }
    public function update(Request $request)
    {
        $input = $request->all();
        $user = User::find($input['id']);
        $rel = $user->update(['username' => $input['username']]);
        if($rel)
        {
            return redirect('user/index');
        }
        else{
            return back();
        }
    }
}
