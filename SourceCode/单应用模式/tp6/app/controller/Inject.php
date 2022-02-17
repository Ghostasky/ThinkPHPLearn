<?php
namespace app\controller;
use app\model\One;

class Inject
{
    protected $one;

    public function __construct(One $one)
    {
        $this->one = $one;
    }

    public function index()
    {
        return $this->one->username;
    }

    public function bind()
    {
        //bind('one', 'app\model\One');
        //return app('one')->username;

//        bind('one', 'app\model\One');
//        $one = app('one', [], true);
//        return $one->username;

//        bind('one', 'app\model\One');
//        $one = app('one', [['file']], true);
//        return $one->username;

        //return app('app\model\One')->username;

//        bind([
//            'one'   =>  'app\model\One',
//        ]);
//        return app('one')->username;

//        bind([
//            'one'   =>  \app\model\One::class,
//        ]);
//        return app('one')->username;

        return app('one')->username;

    }
}