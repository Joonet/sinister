<?php

/**
 * Created by PhpStorm.
 * User: Jo
 * Date: 10/2/2017
 * Time: 17:42
 */
namespace app\admin\model;
use think\Model;
use think\Db;
class GoodsBrands extends Model
{
    public $id;
    public $name;
    public $num;
    public $price;

    protected $table = "tdb_fruitshop";

    protected $type = array(

    );

    protected $update = array(

    );

    protected $insert = array(

    );

    protected $auto = array(

    );

    protected function getNumAttr($num, $data)
    {
        return $num*100;
    }

    protected function setNumAttr($num)
    {
        return $num*100;
    }
}

