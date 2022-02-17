<?php
namespace app\index\controller\group;

class Blog
{
    public function index()
    {
        return 'Group Blog index.';
    }

    public function read()
    {
        return 'Group Blog read.';
    }

    public function details($id)
    {
        return '详情id:'.$id;
    }


}