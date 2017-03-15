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
    public $username;
    public $password;
    public $birth;
    public $email;
    public $gender;
    public $address;
    public $photo;
    public $height;
    public $weight;
    public $receive_noti;
    public $edit_time_led_xml;
    public $name_led_xml;

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