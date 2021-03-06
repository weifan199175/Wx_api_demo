<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 15:59
 */

namespace app\api\model;


class Theme extends BaseModel
{
//    protected $hidden = ['delete_time','update_time','topic_img_id','head_img_id'];

    public function topicImg()
    {
        return $this->belongsTo('Image','topic_img_id','id');
    }

    public function headImg()
    {
        return $this->belongsTo('Image','head_img_id','id');
    }

    public function products()
    {
        return $this->belongsToMany('product','theme_product','product_id','theme_id');
    }
}