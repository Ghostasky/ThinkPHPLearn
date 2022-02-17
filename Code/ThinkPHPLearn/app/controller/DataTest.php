<?php

namespace app\controller;

use think\facade\Db;

class DataTest
{
    public function index()
    {
//        $all= Db::table('tp_role')->select();
        $all = Db::connect('mysql')->table('tp_role')->select();
//        数据库类型
        return json($all);
    }
}