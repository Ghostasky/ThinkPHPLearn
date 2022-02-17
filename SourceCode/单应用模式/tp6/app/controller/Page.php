<?php
namespace app\controller;
use app\model\User;
use think\facade\View;

class Page
{
    public function index()
    {
        //$list = User::paginate(3);
//        $list = User::paginate([
//            'list_rows' =>  4,
//            'var_page'  =>  'page'
//        ]);

        //echo $list->total();
        //echo $list->render();
        //echo $list->count();
        //echo $list->lastPage();

        $list = User::paginate(3)->each(function ($item) {
            $item['gender'] = '【'.$item['gender'].'】';
            return $item;
        });

        return View::fetch('index', [
            'list'  =>  $list
        ]);
    }
}