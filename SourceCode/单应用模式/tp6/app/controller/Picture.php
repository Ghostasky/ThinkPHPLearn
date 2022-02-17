<?php
namespace app\controller;

use think\Image;

class Picture
{
    public function index()
    {
        $image = Image::open('image.png');

        //echo $image->type();
        //echo $image->width();

        //裁剪
        //$image->crop(550,400)->save('crop1.png');

        //缩略
        //$image->thumb(500,500)->save('thumb1.png');

        //旋转图片
        //$image->rotate(180)->save('rotate1.png');

        //图片水印
        //$image->water('mr.lee.png', 1)->save('water1.png');


        //文字水印
        $image->text('Mr.Lee', getcwd().'/1.ttf', 30, '#ffffff')->save('text1.png');
    }




}