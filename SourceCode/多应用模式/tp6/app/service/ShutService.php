<?php
declare (strict_types = 1);

namespace app\service;

use app\common\Shut;

class ShutService  extends \think\Service
{

    /**
     * 注册服务
     *
     * @return mixed
     */
    public function register()
    {
    	//绑定一个标识，就是将被服务的类绑定到容器中去
        $this->app->bind('shut', Shut::class);
    }

    
    /**
     * 执行服务
     *
     * @return mixed
     */
    public function boot()
    {
        //
        Shut::setName('Mr.Wang');
    }
}
