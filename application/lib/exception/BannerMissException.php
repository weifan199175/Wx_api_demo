<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/13
 * Time: 11:01
 */

namespace app\lib\exception;


use think\Exception;

class BannerMissException extends BaseException
{
   public $code = 404;

   public $msg  = '请求banner不存在';

   public $errorCode =10000 ;
}