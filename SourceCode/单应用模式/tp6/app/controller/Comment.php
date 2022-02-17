<?php
namespace app\controller;

class Comment
{
    public function read($id, $blog_id)
    {
        return '评论ID:'.$id.'，从属帖子ID:'.$blog_id;
    }

    public function edit($id, $blog_id)
    {
        return '评论ID:'.$id.'，从属帖子ID:'.$blog_id;
    }
}