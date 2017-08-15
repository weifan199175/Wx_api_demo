<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 9:34
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{

    //url提取器
    protected function prefixImgUrl($value,$data)
    {
        $finalUrl = $value;
        if($data['from'] == 1)
        {
            $finalUrl =  config('setting.img_prefix').$value;
    }
        return $finalUrl;
    }
}