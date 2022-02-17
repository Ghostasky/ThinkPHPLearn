<?php
namespace app\controller;
use think\facade\Filesystem;
use think\facade\Request;
use think\facade\Validate;

class Upload
{
    public function index()
    {
        $file = Request::file('image');

        //编写规则
        $validate = Validate::rule([
            'image'     =>      'file|fileExt:jpg,png,gif'
        ]);

        //验证规则
        $result = $validate->check([
            'image'     =>      $file
        ]);

        //正确输出地址，错误提示
        if ($result) {
            $info = Filesystem::putfile('topic', $file);
            dump($info);
        } else {
            dump($validate->getError());
        }



    }

    public function more()
    {
        $files = Request::file('image');
        $info = [];
        foreach ($files as $file) {
            $info[] = Filesystem::putfile('topic', $file);
        }
        dump($info);
    }

}