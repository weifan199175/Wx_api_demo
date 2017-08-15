<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/14
 * Time: 15:48
 */

namespace app\api\model;


use think\Model;

class Image extends BaseModel
{
    protected $hidden = ['id','from','delete_time','update_time'];

    //图片路径合成器
    public function getUrlAttr($value,$data)
    {
       return $this->prefixImgUrl($value,$data);
    }

}