<?php

namespace app\controller;

use app\model\User as UserModel;
use think\facade\Db;

class DataModel
{
    public function index()
    {
        //UserModel::select();
        //return json(User::select());
        //return json(UserModel::find(288));
        //$user = UserModel::find(288);
        //$user = UserModel::where('list->username', '小红')->find();
        //echo $user->list->username;
    }

    public function insert()
    {
        //        $user = new UserModel();
        //        $user->username     =       '李白';
        //        $user->password     =       '123';
        //        $user->gender       =       '男';
        //        $user->email        =       'libai@163.com';
        //        $user->price        =       100;
        //        $user->details      =       '123';
        //        $user->uid          =       1011;
        //
        //        $list = new \stdClass();
        //        $list->username = '小红';
        //        $list->gender = '女';
        //        $list->email = 'xiaohong@163.com';
        //        $user->list = $list;
        //
        //        $user->isAutoWriteTimestamp(false)->replace()->save();
        //
        //        return Db::getLastSql();

        //        $user = new UserModel();
        //        $user->allowField(['username', 'password', 'details'])->save([
        //            'username'     =>       '李白',
        //            'password'     =>       '123',
        //            'gender'       =>       '男',
        //            'email'        =>       'libai@163.com',
        //            'price'        =>       100,
        //            'details'      =>       '123',
        //            'uid'          =>       1011,
        //        ]);

        //        $dataAll = [
        //            [
        //                'username'     =>       '李白1',
        //                'password'     =>       '123',
        //                'gender'       =>       '男',
        //                'email'        =>       'libai@163.com',
        //                'price'        =>       100,
        //                'details'      =>       '123',
        //                'uid'          =>       1011,
        //            ],
        //            [
        //                'username'     =>       '李白2',
        //                'password'     =>       '123',
        //                'gender'       =>       '男',
        //                'email'        =>       'libai@163.com',
        //                'price'        =>       100,
        //                'details'      =>       '123',
        //                'uid'          =>       1011,
        //            ]
        //        ];
        //        $user = new UserModel();
        //        dump($user->saveAll($dataAll));

        //        $user = UserModel::create([
        //            'username'     =>       '李白',
        //            'password'     =>       '123',
        //            'gender'       =>       '男',
        //            'email'        =>       'libai@163.com',
        //            'price'        =>       100,
        //            'details'      =>       '123',
        //            'uid'          =>       1011,
        //        ], ['username', 'password', 'details', 'email'], false);
        //        echo $user->id;

        UserModel::create([
            'username'     =>       '李白',
            'password'     =>       '123',
            'gender'       =>       '男',
            'email'        =>       'libai@163.com',
            'price'        =>       100,
            'details'      =>       '123',
            'uid'          =>       1011,
            'list'         =>       ['username' => '小红', 'gender' => '女', 'email' => 'xiaohong@163.com']
        ]);
    }

    public function delete()
    {
        //$user = UserModel::find(259);
        //dump($user->delete());
        //UserModel::destroy(257);
        //UserModel::destroy([254,255,256]);
        //UserModel::where('username', '=', '李黑')->delete();
        UserModel::destroy(function ($query) {
            $query->where('username', '=', '李黑')->delete();
        });
    }

    public function update()
    {
        //        $user = UserModel::find(267);
        //        $user->username = '李红';
        //        $user->email    = 'lihong@163.com';
        //        $user->price    = Db::raw('price + 1');
        //        //$user->price    = 200;
        //        //dump($user->allowField(['username','price'])->force()->save());
        //        $user->readonly(['username', 'email'])->save();

        //        $user = new UserModel();
        //        $list = [
        //            ['id'=>237, 'username'=>'白+黑', 'email'=>'baihei@163.com'],
        //            ['id'=>250, 'username'=>'白+黑', 'email'=>'baihei@163.com'],
        //            ['id'=>251, 'username'=>'白+黑', 'email'=>'baihei@163.com'],
        //        ];
        //        $user->saveAll($list);

        //        UserModel::update([
        //            'id'        =>      251,
        //            'username'  =>      '李白',
        //            'email'     =>      'libai@163.com'
        //        ]);

        //        UserModel::update([
        //            'username'  =>      '李白',
        //            'email'     =>      'libai@163.com'
        //        ], ['id'=>250]);

        UserModel::update([
            'username'  =>      '李黑',
            'email'     =>      'lihei@163.com'
        ], ['id' => 301], ['username']);

        //        $user = UserModel::find(288);
        //        $user->list->username = '小白';
        //        $user->save();
    }

    public function select()
    {
        //$user = UserModel::find(419);
        //return json($user);

        //        $user = UserModel::findOrEmpty(419);
        //        if ($user->isEmpty()) {
        //            echo '空的';
        //        }

        //$user = UserModel::select([19,20,21]);
        //return json($user);

        //        $user = UserModel::where('status', 1)
        //                        ->limit(3)
        //                        ->order('id', 'desc')
        //                        ->select();
        //        return json($user);

        //$user = UserModel::where('id', 19)->value('username');
        //return json($user);

        //$user = UserModel::whereIn('id', [19,20,21])->column('username', 'id');
        //return json($user);

        //return json(UserModel::getByUsername('辉夜'));
        //return json(UserModel::max('price'));

        //        UserModel::chunk(5, function ($users) {
        //            foreach ($users as $user) {
        //                echo $user->username;
        //            }
        //            echo '<br>...<br>';
        //        });

        foreach (UserModel::where('status', 1)->cursor() as $user) {
            echo $user->username;
            echo '<br>...<br>';
        }
    }

    public function field()
    {
        //UserModel::select();
        //Db::name('user')->select();

        $user = UserModel::find(19);
        echo $user->username;
        echo $user['email'];
        echo $user->createTime;

        //        $user = new UserModel();
        //        echo $user->getUsername();
    }

    public function getAttr()
    {
        $user = UserModel::withAttr('email', function ($value) {
            return strtoupper($value);
        })->find(19);
        //echo $user->status;
        //echo $user->nothing;
        //echo $user->getData('status');
        return json($user);
        //return json($user->getData());
    }

    public function scope()
    {
        //$result = UserModel::scope('male')->select();
        //$result = UserModel::male()->select();

        //$result = UserModel::scope('email', 'xiao')->select();
        //$result = UserModel::email('xiao')->select();

        //        $result = UserModel::scope('email', 'xiao')
        //                           ->scope('price', 80)->select();

        //$result = UserModel::email('xiao')->price(80)->select();

        UserModel::withoutGlobalScope(['status'])->select();

        return Db::getLastSql();
        // return json($result);
    }

    public function search()
    {
        $result = UserModel::withSearch(['email', 'create_time' => 'ctime'], [
            'email'         =>      'xiao',
            'ctime'         =>      ['2014-1-1', '2017-1-1'],
            'sort'          =>      ['price' => 'desc']
        ])->where('gender', '男')->select();


        //return Db::getLastSql();
        return json($result->hidden(['username', 'details'])
            ->visible(['username', 'email'])
            ->append(['nothing'])
            ->withAttr('email', function ($value) {
                return strtoupper($value);
            }));
    }

    public function typec()
    {
        $user = UserModel::find(20);
        var_dump($user->status);
        var_dump($user->price);
        var_dump($user->create_time);
    }

    public function softDelete()
    {
        //UserModel::destroy(298);
        //UserModel::find(299)->delete();

        //$user = UserModel::select();
        //return Db::getLastSql();
        //return json($user);

        //$user = UserModel::withTrashed()->select();
        //$user = UserModel::onlyTrashed()->select();
        //return json($user);

        //还原软删除
        //$user = UserModel::onlyTrashed()->find(299);
        //$user->restore();
        //return json($user);

        //真实删除，先还原，再删除
        //UserModel::destroy(300, true);

        //真实删除，先还原，再删除
        //$user->force()->delete();

        //直接找到软删除的数据直接删除，
        //UserModel::onlyTrashed()->find(298)->force()->delete();

    }
}