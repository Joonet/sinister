<?php
/**
 * Created by PhpStorm.
 * User: Jo
 * Date: 24/2/2017
 * Time: 16:41
 */

namespace app\api\controller;
use app\api\model\User;
use think\Model;
use think\Controller;

class Login extends Controller
{
    public function login(){
        $username = input('post.username');
        $password = input('post.password');
//
        $result = User::get(['username' => $username]);
        if ($result['password'] == $password){
            return myJson(200, '登录成功', $result);
        }else{
            return myJson(201, '登录失败');
        }

    }


}