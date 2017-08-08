<?php
/**
 * Created by weifan    .
 * User: weifan
 * Date: 2017/7/6
 * Time: 11:22
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name'=>'require|max:10',
        'email'=>'email'
    ];
}