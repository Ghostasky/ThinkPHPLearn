<?php
declare (strict_types = 1);
namespace app\middleware;

use think\Response;

class Check
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        //处理HTTP请求，中间件代码
        //if ($request->param('name') == 'index') {
        //    return redirect('../');
        //}

        //前置中间件
        //echo '前置中间件';

        echo 'check';
        $request->name = 'Mr.Lee';

        $reponse = $next($request);

        //后置中间件
        //echo '后置中间件';

        //这里回调本身返回response对象
        return $reponse;
    }

    public function end(Response $response)
    {
        //echo '收尾工作';
    }

}
