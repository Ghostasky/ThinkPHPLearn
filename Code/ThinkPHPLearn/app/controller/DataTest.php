<?php

namespace app\controller;

use app\model\User;
use think\facade\Db;
use think\facade\View;

class DataTest
{
    public function index()
    {
        //        $all= Db::table('tp_role')->select();
        $all = Db::connect('mysql')->table('tp_role')->select();
        //        数据库类型
        return json($all);
    }

    public function demo()
    {
        $all = Db::table('tp_book')->select();
        //        $all = Db::connect('mysql')->table('tp_role')->select();
        //        数据库类型
        return json($all);
    }

    public function dataInquire()
    {
        //        $all = Db::table('tp_book')->select();
        //        $all = Db::table('tp_book')->where('id',2)->select();
        //        最后一条查询
        //        $all = Db::getLastSql();
        //        $all = Db::table('tp_book')->where('id',42)->findOrFail();
        //        $all = Db::table('tp_book')->where('id',42)->findOrEmpty();


        //        $all = Db::table('tp_book')->select()->toArray();
        //        $all = Db::name('book')->select()->toArray();
        //        dump($all);


        //        $all = Db::name('book')->where('id',2)->value('title');
        //        return $all;

        //        $all = Db::name('book')->column('title');
        $all = Db::name('book')->column('title', 'id');
        return json($all);
        //        return $all;
    }

    public function lianshi()
    {
        $all = Db::name('book');
        dump($all);
        //        return $all;

    }

    public function data10()
    {
        //数据库新增
        $data = [
            'id' => 10,
            'user_id' => '100',
            'title' => 'GWT_book'
        ];
        $data1 = [
            'id' => 11,
            'user_id' => '200',
            'title' => '《GWT_book》'
        ];
        //        新增
        $dbTableBook = Db::name('book');
        //        $dbTableBook->insert($data);
        $dbTableBook->replace()->insert($data1);
        return Db::getLastSql();
    }

    public function data11()
    {
        //        数据删除修改
        $data1 = [
            'id' => 11,
            'user_id' => '200',
            'title' => '《GWT_book_new》'
        ];
        $data2 = [
            'title' => '《GWT_book_new——new》'
        ];
        $dbTableBook = Db::name('book');
        $dbTableBook->where('id', 11)->update($data1);
        //        只更新其中一个字段试试
        //        只更新其中一个字段试试
        $dbTableBook->where('id', 11)->update($data2);
        //        如果包含主键，可以直接update


        return Db::getLastSql();
    }

    public function data12()
    {
        //        数据库查询表达式
        $dbTableBook = Db::name('book');
        $likeSelect = $dbTableBook->where('title', 'like', '《%')->select();
        //        return Db::getLastSql();
        Db::select();
        return view();
    }
}