<?php
// 事件定义文件
return [
    'bind'      => [
    ],

    'listen'    => [
        'AppInit'  => [],
        'HttpRun'  => [],
        'HttpEnd'  => [],
        'LogLevel' => [],
        'LogWrite' => [],
        'TestListen'    =>  [
            \app\listener\TestListen::class,
            \app\listener\TestOne::class,
            \app\listener\TestTwo::class
        ]
    ],

    'subscribe' => [
        'UserSub' =>    \app\subscribe\UserSub::class
    ],
];
