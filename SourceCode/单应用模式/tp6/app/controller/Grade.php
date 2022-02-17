<?php
namespace app\controller;
use app\model\Role;
use app\model\User as UserModel;
use app\model\Profile as ProfileModel;

class Grade
{
    public function index()
    {
        //$user = UserModel::find(19);
        //return json($user->profile);
        //echo $user->profile->hobby;

        //$profile = ProfileModel::find(1);
        //echo $profile->user->username;

        //$user = UserModel::find(19);
        //关联修改
        //$user->profile->save(['hobby'=>'酷爱小姐姐']);
        //关联新增
        //$user->profile()->save(['hobby'=>'酷爱小姐姐']);

        //$user = UserModel::hasWhere('profile', ['id'=>1])->find();
        //return json($user);

//        $user = UserModel::hasWhere('profile', function ($query) {
//            $query->where('id', 8);
//        })->find();
//        return json($user);

        //$user = UserModel::find(19);
        //return json($user->profile);
        //return json($user->profile()->select());
        //return json($user->profile->where('id', '>=', 10));
        //return json($user->profile()->where('id', '>=', 10)->select());

        //return json(UserModel::has('profile', '>=', 2)->select());
        //$user->profile()->save(['hobby'=>'测试数据1', 'status'=>1]);
//        $user->profile()->saveAll([
//            ['hobby'=>'测试数据2', 'status'=>1],
//            ['hobby'=>'测试数据3', 'status'=>1]
//        ]);

        //关联删除
        $user = UserModel::with('profile')->find(304);
        $user->together(['profile'])->delete();

    }

    public function load()
    {
//        $list = UserModel::select([19,20,21]);
//        foreach ($list as $user) {
//            dump($user->profile->toArray());
//        }

//        $list = UserModel::with(['profile'])->select([19,20,21]);
//        foreach ($list as $user) {
//            dump($user->profile->toArray());
//        }

//        $list = UserModel::with(['profile','book'])->select([19,20,21]);
//        foreach ($list as $user) {
//            dump($user->profile.$user->book);
//        }

//        $list = UserModel::with(['profile'=>function ($query) {
//            $query->field('user_id,hobby');
//        }])->field('id,username')->select([19,20,21]);
//
//        foreach ($list as $user) {
//            dump($user->profile->toArray());
//        }

        $list = UserModel::select([19,20,21]);
        $list->load(['profile']);
        foreach ($list as $user) {
            dump($user->profile->toArray());
        }
    }

    public function count()
    {
//        $list = UserModel::withCount(['profile'])->select([19,20,21]);
//        foreach ($list as $user) {
//            echo $user->profile_count;
//            echo '<br>';
//        }

//        $list = UserModel::withSum(['profile'=>'ps'], 'status')->select([19,20,21]);
//        foreach ($list as $user) {
//            echo $user->ps;
//            echo '<br>';
//        }

        $list = UserModel::with(['profile'])->select([19,20,21]);
        //return json($list->hidden(['password', 'gender','profile.status']));
        return json($list->append(['book']));
    }

    public function many()
    {
//        $user = UserModel::find(19);
//        $roles = $user->roles;
//        return json($roles);

        //$user = UserModel::find(19);
        //$user->roles()->save(['type'=>'广告投放专员']);

        $user = UserModel::find(19);
        //$user->roles()->save(5);
        //$user->roles()->save(Role::find(5));
        //$user->roles()->attach(Role::find(5), ['details'=>'测试详情']);
        $user->roles()->detach(Role::find(5));

    }
}