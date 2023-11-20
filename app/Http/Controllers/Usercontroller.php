<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //

    /**
     * Undocumented function
     *添加
     * @return void
     */
    public function add(){

        return view('add');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function insert(){
        dd($_POST);
        echo 'insert';

    }
    public function from(){
        return view('upload');
    }

    public function upload(request $request){
        $file = $request->file("img");
        if(!$request->hasFile("img")){
            return "文件未上传";
        }
        // $path = $request->img->path();
        // echo $path;
        // $extension = $request->img->extension();
        // echo $extension;
        $path = $request->img->store("images");
        var_dump($path);

    }

    public function shows($id){
        echo $id;
    }

    public function index(){
        echo "首页";
    }
}
