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
        //写到数据库
        $user = new User();
        $user['name'] = input('post.name');
        $user['username'] = input('post.username');
        $user['password'] = input('post.password');         //经过客户端加密后的字符串
        $user['birth'] = input('post.birth');
        $user['address'] = input('post.address');
        $user['email'] = input('post.email');
        $user['gender'] = input('post.gender');
        $user['receive_noti'] = input('post.receive_noti');
        $user['edit_time_led_xml'] = input('post.edit_time_led_xml');
        $user['name_led_xml'] = input('post.name_led_xml');


        if ($user->save()){
            return json(array(
                'status' => 1,
                'msg' => 'register succeed',
                'data' => ''
            ));
        }
    }

    //用户是否存在
    public function isUserAvailable(){
        $username = input('post.username');
        if (User::get(['username' => $username])){
            return json(array(
                'status' => -1,
                'msg' => 'user existed already',
                'data' => ''
            ));
        }
    }

}