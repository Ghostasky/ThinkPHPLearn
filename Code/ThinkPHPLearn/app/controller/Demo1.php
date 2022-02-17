<?php

namespace app\controller;
use app\BaseController;
use think\Env;

class Demo1 extends BaseController
{

    public function  Demo_Fun()
    {
        $array=['a','b','c'];
        halt('a',$array);
//        return "qwer";
    }
    public function index()
    {
//        返回目录
//        return $this->app->getBasePath();
//        返回当前方法名
        return $this->request->action();
    }
    public function Demo2()
    {
        return Env::get('database.type', 'mysql');

    }
}