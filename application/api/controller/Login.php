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

class Login extends Model
{
    public function login(){
        $username = input('get.username');
        $password = input('get.password');
//
        $result = User::get(['name' => $username]);
        if ($result['password'] == $password){
            return '登录成功';
        }else{
            return '登录失败';
        }

    }

    public function test(){
        $name = input('get.name');
        $brand = GoodsBrands::get(['name' => $name]);
        if ($brand){
            return json(array(
                'status' => 1,
                'msg' => 'user existed',
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