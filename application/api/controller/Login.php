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
        $result = User::get(['username' => $username]);
        if ($result['password'] == $password){
            return json(array(
                'status' => 1,
                'msg' => 'Login succeed',
                'data' => $result
            ));
        }else{
            return json(array(
                'status' => -1,
                'msg' => 'wrong password',
                'data' => '',
            ));
        }

    }


}