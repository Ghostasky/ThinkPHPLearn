<?php
// 全局中间件定义文件
return [
    // 全局请求缓存
    // \think\middleware\CheckRequestCache::class,
    //'think\middleware\CheckRequestCache',
    // 多语言加载
     \think\middleware\LoadLangPack::class,
    // Session初始化
     \think\middleware\SessionInit::class,

    //注册一个中间件
    //\app\middleware\Check::class

];
