<?php
namespace app\controller;

class Error
{
    public function index()
    {
        return '当前控制器不存在！';
    }

    public function miss()
    {
        return '404，页面不存在！';
    }
}