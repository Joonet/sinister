<?php
/**
 * Created by PhpStorm.
 * User: Jo
 * Date: 16/3/2017
 * Time: 11:46
 */

namespace app\api\controller;
use think\Controller;
use think\Model;
use app\api\model\User;


class Info extends Controller
{
    //更新用户信息
    public function updateUserInfo(){
        $name = input('post.name');
        $username = input('post.username');
        $birth = input('post.birth');
        $gender = input('post.gender');
        $weight = input('post.weight');
        $height = input('post.height');
        //username
        $user = User::get(['username' => $username]);
        if ($user){
            $user['name'] = $name;
            $user['birth'] = $birth;
            $user['gender'] = $gender;
            $user['weight'] = $weight;
            $user['height'] = $height;

            if (false !== $user->save()) // $user->isUpdate(false)->save()
                    return '更新用户成功';
            else
                    return $user->getError();
        }else{
            echo '用户不存在二货';
        }

    }

    // 更新用户数据
    public function update($id) {
        $user = UserModel::get($id); $user->nickname = '刘晨';
        $user->email = 'liu21st@gmail.com'; if (false !== $user->save()) {
            return '更新用户成功'; } else {
            return $user->getError();
        }
    }
}