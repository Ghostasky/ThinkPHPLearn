<?php
namespace app\index\controller;
use think\annotation\Route;
use think\annotation\route\Group;
use think\Request;

/**
 * Class Address
 * @package app\controller
 * @Group("ads")
 */
class Address
{
    protected $middleware = ['Check'];
    /**
     * @return string
     */
    public function index()
    {
        //echo session('redirect_url');
        //return 'index';
        $url = url('address/back');
        return '<a href="'.$url.'">返回<a>';
    }

    public function read(Request $request, $id)
    {
        echo $request->name;
        return 'id:'.$id;
    }

    public function back()
    {
        return redirect('1')->with('flag', 1)->restore();
    }

    /**
     * @param $id
     * @return string
     * @route("ds/:id", ext="html", method="GET", https=0)
     */
    public function details($id)
    {
        return '详情id:'.$id;
    }

//    public function read($name)
//    {
//        return '读取:'.$name;
//    }

    public static function details2($id)
    {
        return '详情id2:'.$id;
    }

    public function search($id, $uid)
    {
        return '详情id:'.$id.', 详情uid:'.$uid;
    }

    public function url()
    {
        //return url('Address/details', ['id'=>5]);
        //Route::rule('ds/:id', 'Address/details', 'GET|POST')->name('ds');
        //return url('ds', ['id'=>5]);
    }

    public function miss()
    {
        return '404, miss';
    }
}