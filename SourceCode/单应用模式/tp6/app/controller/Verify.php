<?php
namespace app\controller;
use app\validate\User;
use think\Exception;
use think\exception\HttpException;
use think\exception\ValidateException;
use think\facade\Request;
use think\facade\Validate;
use think\validate\ValidateRule;
use think\annotation\Route;
use think\annotation\route\Validate as V;

class Verify
{
    public function index()
    {
        //echo app()->getThinkPath();
        try {
            validate(User::class)->batch(true)->scene('edit')->check([
                'name'  =>  '',
                'price' =>   '',
                'email' =>  'xiaoxin163.com'
            ]);
        } catch (ValidateException $e) {
            //dump($e->getError());
            //throw new Exception('异常', 10086);
            //throw new HttpException(404, '页面不存在！');
            abort(404, '页面不存在！');
        }
    }

    /**
     * @param $id
     * @return string
     * @route("vr/:id")
     * @V(User::class)
     */
    public function route($id)
    {
        return 'id:'.$id;
    }

    public function rule()
    {
//        $validate = Validate::rule([
//            'name'             =>      'require|max:20',
//            'price'            =>      'number|between:1,100',
//            'email'            =>      'email'
//        ]);

        $validate = Validate::rule([
            'name'             =>      ValidateRule::isRequire()->max(20),
            'price'            =>      ValidateRule::isNumber()->between('1,100'),
            'email'            =>      ValidateRule::isEmail(null, '邮箱格式不正确'),

            //test为空
            //'test'      =>      'require'
            //'test'      =>      ValidateRule::isRequire()
            //'test'      =>      ValidateRule::must()

            //'test'      =>      ValidateRule::number()
            //'test'      =>      ValidateRule::isNumber()
            //'test'      =>      'chs'
            //'test'      =>      ValidateRule::isChs()

            //test区间长度
            //'test'      =>      'length:4'
            //'test'      =>      ValidateRule::length(4)
            //'test'      =>      'length:2,4'
            //'test'      =>      ValidateRule::length('2,4')

            //test比较
            //'test'      =>      'eq:100'
            //'test'      =>      ValidateRule::eq(100)
            //'test'      =>      'confirm:price'

            //和表的字段比较
            'username'      =>      'unique:user'

        ]);

        $validate->message([
            'name.require'      =>      ['code'=>1001, 'msg'=>'姓名不得为空'],
            'name.max'          =>      '姓名不得大于20位',
        ]);

        $validate = $validate->rule([
            'name'  =>  function ($value) {
                return $value != '' ? true : '姓名不得为空';
            }
        ]);

        $result = $validate->batch(true)->check([
            'name'  =>  '蜡笔小新',
            'price' =>   100,
            'email' =>  'xiaoxin@163.com',
            'test'  =>  100,
            'username'  =>  '蜡笔小新'
        ]);

        if (!$result) {
            dump($validate->getError());
        }
    }

    public function single()
    {
        dump(Validate::isEmail('xiaoxin163.com'));
        dump(Validate::isRequire(''));
        dump(Validate::isNumber(10));

        dump(Validate::checkRule(10, 'number|between:1,10'));
        dump(Validate::checkRule(10, ValidateRule::isNumber()->between('1,10')));
    }

    public function token()
    {
        //echo session('__token__');
        //echo '<br>';
        //echo input('post.__token__');

        //$check = Request::checkToken('__token__');

        //if ($check == false) {
        //    echo '令牌无效';
        //}

        $validate = Validate::rule([
            'name'      =>      'require|token'
        ]);

        $result = $validate->batch(true)->check([
            'name'      =>  input('post.name'),
            '__token__' =>  input('post.__token__')
        ]);

        if (!$result) {
            dump($validate->getError());
        }
    }




}