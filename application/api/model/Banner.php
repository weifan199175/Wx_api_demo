<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/6
 * Time: 14:57
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends Model
{
    public static function getBannerByID($id)
    {
      $result = Db::table('banner_item')
          ->where(function ($query) use ($id){
              $query->where('banner_id','=',$id);
          })
          ->select();
        return $result;
    }
}