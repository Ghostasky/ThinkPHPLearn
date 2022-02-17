<?php
namespace app\common;

class Shut
{
    protected static $name = 'Mr.Lee';

    public static function setName($name)
    {
        self::$name = $name;
    }

    public function run()
    {
        halt(self::$name.'温馨提醒您，系统已关闭...');
    }
}