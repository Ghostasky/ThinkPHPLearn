<?php
declare (strict_types = 1);

namespace app\subscribe;

class UserSub
{
    public function onUserLogin()
    {
        echo '+登录监听';
    }

    public function onUserLogout()
    {
        echo '+退出监听';
    }
}
