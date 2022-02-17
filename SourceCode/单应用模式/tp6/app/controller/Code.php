<?php
namespace app\controller;
use think\captcha\facade\Captcha;
use think\facade\Validate;
use think\facade\View;

class Code
{
    public function verify()
    {
        return Captcha::create('verify');
    }

    public function form()
    {
        return View::fetch('form');
    }

    public function check()
    {
//        //验证器规则
//        $validate = Validate::rule([
//            'captcha'   =>  'require|captcha'
//        ]);
//
//        //和表单数据对比
//        $result = $validate->check([
//            'captcha'   =>  input('post.code')
//        ]);
//
//        if (!$result) {
//            dump($validate->getError());
//        }

        if (!captcha_check(input('post.code'))) {
            echo '验证失败！';
        }
    }






}