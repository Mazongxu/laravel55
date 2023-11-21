<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    //

    public function select()
    {
        $res = DB::select('select * from sp_ad limit 10');
        dd($res);
    }

    //事务

    public function trans(){
        // DB::transaction(function(){
        //     $res1 = Db::update("update  sp_ad set sort=100 where id=1 ");
        //     $res2 = Db::update("update  sp_ad set sort=110 where id=2 ");
        //     if($res1 && $res2){
        //         DB::commit();
        //     }else{
        //         DB::rollback();
        //     }
        // });

        try{
            $res1 = Db::update("update  suser set sort=100 where id=1 ");

        }catch(\Exception $e){
            //捕捉异常

        }
        echo "wefeq";

    }
    //join 使用

    public function join()
    {
        $res = DB::table("sp_ad")
        ->join('sp_ad_cate','sp_ad.cate_id','=','sp_ad_cate.id')
        ->take(10)
        ->select('sp_ad.*','sp_ad_cate.cate_name')
        ->get();
        dd($res);
    }


}
