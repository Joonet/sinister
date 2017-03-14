<?php

/**
 * Created by PhpStorm.
 * User: Jo
 * Date: 14/2/2017
 * Time: 10:56
 */
namespace app\api\controller;
use think\Controller;
use app\admin\model\GoodsBrands;
use think\Db;
class Jo extends Controller
{
    public function test(){
        echo add(2,9);
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

//    public function tt()
//    {
//        $nickname = input('post.nickname');
//        $email = input('post.email');
//        $user = GoodsBrands::get()
//    }

}git log -p master..origin/master