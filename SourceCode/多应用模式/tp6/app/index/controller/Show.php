<?php
namespace app\index\controller;
use app\BaseController;
use app\common\Shut;
use app\model\User;
use think\facade\View;

class Show extends BaseController
{
    public $name = 'Mr.Lee';
    public $age = 100;
    const PI = 3.14;

    public function index(Shut $shut)
    {

        //$shut->run();
        //$this->app->shut->run();
        //app()->shut->run();


        //View::assign('name', 'Mr.Lee');
        View::assign([
            'name'  =>  'Mr.Lee',
            'email' =>  'lee@163.com'
        ]);
//        return View::fetch('index', [
//            'name'  =>  'Mr.Lee',
//            'email' =>  'lee@163.com'
//        ]);

//        return view('index', [
//            'name'  =>  'Mr.Lee',
//            'email' =>  'lee@163.com'
//        ]);

//        return View::filter(function ($content) {
//            return strtoupper($content);
//        })->fetch('index');

//        return view('index')->filter(function ($content) {
//            return strtoupper($content);
//        });

        //View::config(['view_dir_name'=>'view2']);
        //return View::fetch('index');
        //return View::fetch('Address/index');
        //return View::fetch('admin@Address/index');
        //return View::fetch('/index');
        //return View::fetch('../public/test/test');


        return View::engine('php')->fetch('index', [
            'name'  =>  'Mr.Lee',
            'email' =>  'lee@163.com'
        ]);
    }

    public function output()
    {
        $arr = ['name'=>'Mr.lee', 'age'=>100];


        return View::fetch('output', [
            'arr'   =>  $arr,
            'obj'   =>  $this,
            'password'  =>  123456,
            'time'      =>  time(),
            'number'    =>  10
        ]);
    }

    public function fn()
    {
        return '方法';
    }

    public function loop()
    {
        $list = User::select();
        return View::fetch('loop', [
            'list'  =>  $list
        ]);
    }

    public function eq()
    {
        return View::fetch('eq', [
            'name'  =>  'Mr.Lee',
            'name2' =>  'Mr.Lee'
        ]);
    }

    public function condition()
    {
        return View::fetch('condition', [
            'number'    =>  11,
            'id'        =>  10,
            'name'      =>  'Mr.Lee'
        ]);
    }

    public function block()
    {
        return View::fetch('block', [
            'title'     =>      '标题'
        ]);
    }

    public function form()
    {
        return View::fetch('form');
    }



}