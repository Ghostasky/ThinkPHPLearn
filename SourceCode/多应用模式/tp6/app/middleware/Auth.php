<?php
declare (strict_types = 1);
namespace app\middleware;
use think\Response;

class Auth
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next, $param)
    {
        if ($request->param('id') == 10) {
            echo '管理员！'.$param;
        }
        return $next($request);
    }


}
