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
}