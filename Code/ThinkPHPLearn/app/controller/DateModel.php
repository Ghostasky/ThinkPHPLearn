<?php

namespace app\controller;

use app\model\Book;
use think\facade\Db;
use function Sodium\crypto_box_keypair;

class DateModel
{
    public function demo01()
    {
//        return json(User::select());
        $all = Book::select();
        echo $all;
        return Db::getLastSql();
    }

    public function demo22Insert()
    {
//        $user = new Book();
//        $user->user_id = 300;
//        $user->title = '《这是啥》';
//        $user->save();
//        也可以这样：
        $user = new Book();
        $user->save([
            'user_id' => 300,
            'title' => '《这是啥》',
        ]);

    }

    public function demo24()
    {
//        $user = Book::find(9);
        $user = Book::where('id', 9)->find();
        return json($user);
    }

}