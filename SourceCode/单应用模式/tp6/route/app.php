<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;
use app\middleware\Check;
use app\middleware\Auth;

//Route::get('think', function () {
//    return 'hello,ThinkPHP6!';
//});

Route::get('think/:name', function ($name) {
    return 'hello,'.$name;
});

//
//Route::get('hello/:name', 'Index/hello');

//Route::rule('ds/:id', 'Address/details', 'GET|POST');
//Route::rule('/', 'Test/index');

//Route::rule('ds/:id', 'Address/details')->pattern(['id'=>'\d+']);
//Route::rule('sc/:id/:uid', 'Address/search')->pattern(['id'=>'\d+','uid'=>'\d+']);

//Route::pattern(['id'=>'\d+','uid'=>'\d+']);
//Route::rule('sc/:id/:uid', 'Address/search');

//Route::rule('ds-<id>', 'Address/details');
//Route::rule('hi-<name>-<id>', 'Hello:name/index');
//Route::rule('hi-:name-:id', 'Hello:name/index');

//Route::rule('bd/:id', 'group.Blog/details');
//Route::rule('ds/:id', 'Address/details2');
//Route::rule('ds/:id', 'app\controller\Address@details');
//Route::rule('ds/:id', 'app\controller\Address::details2');
//Route::redirect('ds/:id', 'http://localhost:8000');

//Route::rule('ds/:id', 'Address/details')->ext('html|shtml')->https();
//Route::rule('ds/:id', 'Address/details')->denyExt('gif|png');
//Route::rule('ds/:id', 'Address/details')->domain('localhost');
//Route::rule('ds/:id', 'Address/details')->domain('news.abc.com');
//Route::rule('ds/:id', 'Address/details')->domain('news');
//Route::rule('ds/:id', 'Address/details')->ajax();
//Route::rule('ds/:id', 'Address/details')->filter(['id'=>5, 'type'=>1]);
//Route::rule('ds/:id', 'Address/details')->append(['status'=>'a']);
//Route::rule('ds/:id', 'Address/details')->option(['ext'=>'html', 'https'=>true]);

//Route::domain('news.abc.com', function () {
//    Route::rule('ds/:id', 'Address/details');
//});

//Route::domain('news', function () {
//    Route::rule('ds/:id', 'Address/details');
//});

//Route::domain(['news', 'blog', 'live'], function () {
//    Route::rule('ds/:id', 'Address/details');
//})->ext('html');

//Route::rule('ds/:id', 'Address/details')->allowCrossDomain([
//    'Access-Control-Allow-Origin' => 'http://news.abc.com:8000'
//]);

//Route::group(function () {
//    Route::rule('ds/:id', 'Address/details');
//    Route::rule('rd/:name', 'Address/read');
//})->ext('html');

//Route::group('address',function () {
//    Route::rule(':id', 'details');
//    Route::miss('miss');
//    //Route::rule(':name', 'read');
//})->ext('html')
//    ->prefix('Address/')
//    ->pattern(['id'=>'\d+', 'name'=>'\w+'])->append(['status'=>1]);

//Route::miss('public/miss');


//Route::resource('ads', 'Address');
//Route::resource('blog', 'Blog')->vars(['blog'=>'blog_id']);
//Route::resource('blog', 'Blog')->only(['index', 'read']);
//Route::rest('create', ['GET', '/add', 'create']);
//Route::resource('blog', 'Blog');
//Route::resource('blog.comment', 'Comment');

//Route::rule('ds$', 'Url/index');
//Route::rule('ds/:id$', 'Url/details')->name('u');
//Route::rule('re/:id', 'Rely/get')->cache(3600);

//Route::rule('vr/:id', 'Verify/route')
//                ->validate(\app\validate\User::class, 'route');

//Route::rule('vr/:id', 'Verify/route')
//    ->validate([
//        'id'               =>      'number|between:1,10',
//        'email'            =>      \think\validate\ValidateRule::isEmail(null, '邮箱格式不正确')
//    ],null, [
//        'id.number'         =>      '编号必须是数字'
//    ], true);

//Route::rule('vc', 'Code/verify');
//Route::rule('ar/:id', 'Address/read')
//        ->middleware([Auth::class, Check::class]);

//Route::rule('ar/:id', 'Address/read')
//    ->middleware(['Auth', 'Check'], 'ok');

//Route::rule('ar/:id', 'Address/read')
//    ->middleware(function ($request, \Closure $next) {
//        if ($request->param('id') == 10) {
//            echo '管理员！';
//        }
//        return $next($request);
//    });







