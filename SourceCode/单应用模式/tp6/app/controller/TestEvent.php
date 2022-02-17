<?php
namespace app\controller;
use app\listener\TestListen;
use think\facade\Event;

class TestEvent
{
    public function __construct()
    {
        //监听器，动态
//        Event::listen('TestListen', function ($param) {
//            echo '监听器被触发！'.$param;
//        });
    }

    public function info()
    {
        echo '登录前准备！';
        //Event::trigger('TestListen', 'ok');
        //Event::listen('TestListen', TestListen::class);
        event('TestListen');
    }

    public function login()
    {
        echo '登录成功！';
        event('UserLogin');
    }

    public function logout()
    {
        echo '退出成功！';
        event('UserLogout');
    }




}