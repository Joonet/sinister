<?php

/**
 * Created by PhpStorm.
 * User: Jo
 * Date: 24/2/2017
 * Time: 16:45
 */
namespace app\api\model;
use think\Model;
class User extends Model
{
    public $id;
    public $name;
    public $password;

//    protected $type = array(
//
//    );
//
//    protected $update = array(
//
//    );
//
//    protected $insert = array(
//
//    );
//
//    protected $auto = array(
//
//    );
//
//    protected function getNumAttr($num, $data)
//    {
//        return $num*100;
//    }
//
//    protected function setNumAttr($num)
//    {
//        return $num*100;
//    }

}