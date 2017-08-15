<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/6
 * Time: 15:34
 */

namespace app\api\validate;

use think\Validate;

class IDMustBePostiveInt extends BaseValidate
{
    protected $rule =[
        'id'=>'require|isPositiveInteger',
    ];

    protected $message =[
        'id'=>'id必须是正整数',
    ];

}