<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/7
 * Time: 16:36
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
   public $code = 400;
   public $msg = '参数错误';
   public $errorCode = 10000;
}