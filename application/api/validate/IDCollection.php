<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 16:17
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule = [
        'ids' =>'require|checkIDs',
    ];

    protected $message = [
       'ids' =>'ids参数必须是多个逗号分隔的正整数',
    ];

    protected function checkIDs($value)
    {
       $value = explode(',',$value);
       if(empty($value))
       {
           return false;
       }
       foreach($value as $id)
       {
           if(!$this->isPositiveInteger($id))
           {
              return false;
           }
       }
       return true;
    }

}