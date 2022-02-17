<?php
declare (strict_types = 1);
namespace app\listener;

class TestTwo
{
    /**
     * 事件监听处理
     *
     * @return mixed
     */
    public function handle($event)
    {
        echo 'Two监听器被触发！'.$event;
    }    
}
