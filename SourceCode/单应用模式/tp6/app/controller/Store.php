<?php
namespace app\controller;
use think\exception\ErrorException;
use think\facade\Cache;
use think\facade\Cookie;
use think\facade\Lang;
use think\facade\Log;
use think\facade\Request;
use think\facade\Session;
use think\facade\View;

class Store
{
    public function upload()
    {
        return View::fetch('upload');
    }

    public function session()
    {
        Session::set('user', 'Mr.Lee');
        Session::set('count', 10);
        //Session::delete('user');
        //return Session::get('user');
        //Session::clear();
        //dump(Session::all());
        //dump(Request::session());
        //dump(Session::get('name', ''));
        //dump(Session::has('user'));

        //echo Session::pull('user');
        //echo '<br>';
        //return Session::get('user').'1';

        //Session::flash('value', 100);

        session('name', 'Mr.Wang');
        return session('name');
    }

    public function cookie()
    {
        //Cookie::set('user', 'Mr.Lee');
        //Cookie::set('user', 'Mr.Lee', 3600);
        //dump(Cookie::get('user'));
        //dump(Request::cookie());
        //Cookie::forever('name', 'Mr.Wang');
        //dump(Cookie::has('wang'));
        //dump(Cookie::get('wang', '1'));
        //Cookie::delete('user');
        cookie('wang', 'Mr.Wang');
        return cookie('wang');
    }

    public function redis()
    {
        Cache::set('user', 'Mr.Lee', 3600);
        dump(Cache::get('user'));
        dump(Cache::has('user'));
        Cache::inc('num', 3);
        dump(Cache::get('num'));
        Cache::set('arr', [1,2,3]);
        Cache::push('arr', 4);
        dump(Cache::get('arr'));
        //Cache::delete('user');
        dump(Cache::pull('user'));
        dump(Cache::get('user'));
        dump(Cache::remember('start_time', time()));
        //Cache::clear();

        Cache::tag('tag')->set('age', 100);
        Cache::tag('tag')->clear();
        dump(Cache::get('age'));
    }

    public function lang()
    {
        echo Lang::get('require_name');
        echo '<br>';
        echo lang('email_error');

        return View::fetch('lang');
    }

    public function log()
    {
        Log::record('测试日志');
        //Log::clear();
        //dump(Log::getLog());
        //Log::record('错误日志', 'error');
        //Log::write('时时写入', 'error');
        //Log::close();

//        try {
//            echo 0/0;
//        } catch (ErrorException $e) {
//            echo $e->getMessage();
//            Log::record('['.$e->getCode().']被除数不能为零', 'error');
//        }

        Log::diy('自定义的');

    }

    public function middleware()
    {
        echo '<br>主体程序<br>';

        return View::fetch('middleware');
    }


    public function get()
    {
        //return Session::get('value');
    }






}