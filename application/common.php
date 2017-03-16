<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

function add($a,$b){
    if (is_numeric($a) && is_numeric($b))
        return $a+$b;
}

/***
 * @param integer $code 状态码
 * @param string $message 提示信息
 * @param array $data 数据
 * @return string
 */
function myJson($code, $message = '', $data = array()){
    if (!is_numeric($code)){
        return '';
    }

    return json(array(
        'code' => $code,
        'message' => $message,
        'data' => $data
    ));
}


