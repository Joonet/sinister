<?php
namespace app\index\model;
use think\Model;
class ShippingArea extends Model
{
    // 配送区域划分
    // 定义多对多关联
    public function region()
    {
        // 配送区域 BELONGS_TO_MANY 地区表
        //关联的模型，中间表，关联字段，关联字段
        return $this->belongsToMany('Region', 'tp_area_region','region_id','shipping_area_id');
    }    
}