<?php
/**
 * Created by PhpStorm.
 * User: Jo
 * Date: 24/2/2017
 * Time: 17:03
 */

namespace app\api\controller;
use app\api\model\User;

class Register
{
    public function register(){
        $username = input('get.username');
        $password = input('get.password');         //经过客户端加密后的字符串

        //写到数据库
        $user = new User();
        $user['name'] = $username;
        $user['password'] = $password;
        if ($user->save()){
            echo '新增用户成功';
        }
    }


    public function test(){
        echo add(2,5);
        $id = input('post.id');
        $name = input('post.name');
        $brand = GoodsBrands::get(['id' => $id,'name' => $name]);
        if ($brand){
            return json(array(
                'status' => 1,
                'msg' => '查询成功',
                'data' => $brand,
            ));
        }else{
            return json(array(
                'status' => -1,
                'msg' => 'user does not exist',
                'data' => '',
            ));
        }
    }
}