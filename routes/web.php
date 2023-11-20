<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return 'loginpage';
});
//前台路由
Route::Group(['middleware'=>'login'],function(){
   
    
    Route::get('/admins', function () {
        return "abc";
    });
    Route::get('/user/{id}',function($id){
        echo '用户id为'.$id;
    })->where('id','\d+');
    Route::get("/param/{name}",function($name){
        return $name;
    })->where("name","[a-z|A-Z]+");
    
    route::get('/administrator',function(){
        return "这里是后台页面！";
    })->name("admin");
    
    //创建url的时候
    route::get("/home",function(){
        return '<a href="'.route("admin").'">后台</a>';
    });
});

Route::get('/404',function(){
    if(empty($_GET['ID'])){
        abort(404);
    }
});
Route::get('/update',function(){
    echo 'ffsadf';
})->middleware('login');






//后台路由

Route::get('/user/add','UserController@add');
Route::post('/user/insert','UserController@insert');

Route::get('/from','UserController@from');
Route::post('/upload','UserController@upload');

Route::get('user/{id}','UserController@shows')->name("user.shows");

Route::get("ttest",function(){
    echo route("user.shows",['id'=>90]);
});

Route::get('users','UserController@index')->middleware('login');

//Api接口路由


//资源控制器  一条顶7条

Route::resource('tiezi',"TieziController");
// 资源控制器操作处理#
// 动作	URI	操作	路由名称
// GET	/photos	index	photos.index
// GET	/photos/create	create	photos.create
// POST	/photos	store	photos.store
// GET	/photos/{photo}	show	photos.show
// GET	/photos/{photo}/edit	edit	photos.edit
// PUT/PATCH	/photos/{photo}	update	photos.update
// DELETE	/photos/{photo}	destroy	photos.destroy


//Cooke 
Route::get('/cookie','HomeController@set');

//闪存

Route::get('/flash','HomeController@flash');

Route::get('/get-flash','HomeController@getFlash');

Route::get('/userinfo','HomeController@userInfo');

Route::post('/userinfo','HomeController@insert');

Route::get('/dbselect','DbController@select');

Route::get('/trans','DbController@trans');

//join 

Route::get('/join','DbController@join');

