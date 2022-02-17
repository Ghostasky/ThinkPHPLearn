<?php
namespace app\controller;
use think\facade\Route;
use app\facade\Test;

class Url
{
    public function index()
    {
        //return Route::buildUrl('Url/details', ['id'=>5]);
        //return Route::buildUrl('u', ['id'=>5]);
        //return Route::buildUrl('ds/5')->suffix('shtml');
        //return Route::buildUrl('ds/5')->domain(true);
        //return Route::buildUrl('ds/5')->domain('news.abc.com');
        //return Route::buildUrl('ds/5@news.abc.com');
        return url('ds/5');
    }

    public function details($id)
    {
        return 'Id:'.$id;
    }

    public function test()
    {
        //return \app\facade\Test::hello('world');
        return Test::hello('Mr.Lee');
    }


}