<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function set(){
        //设置
        // setcookie('name','guanhui',time()+3600,'/');//秒钟
        // \Cookie::queue('name','mzx',10);//分钟
        // return response('<p>我是响应体</p>')->withCookie('class','lamp207',10);
        //读取
        // GET  /HTTP/1.1
        // Host:localhost
        // Cookie: name=mazx;phone=chuizi;

        $name = \Cookie::get('name');
        dd($name);

    }

    /**
     * 写入闪存
     *
     * @return void
     */
    public function flash(){
        // \Session::flash('info','添加成功');
        return redirect('/get-flash')->with('info',"成功添加");
    }

    /**
     * 读取闪存 一次性
     *
     * @return void
     */
    public function getFlash(){
        // echo \Session::get('info');
        return view("admin");
    }

    public function userInfo(){
        return view("userinfo");
    }

    public function insert(){
        // $info = $_POST;
        // dd($info);
        $data = request()->post();
       if(empty($data['username']) || strlen($data['username']) <6 || strlen($data['username']) >20){
           \Session::flash('error','用户名格式不正确');
           return back()->withInput();
       }
    }
}
