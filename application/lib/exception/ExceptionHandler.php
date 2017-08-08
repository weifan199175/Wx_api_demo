<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/13
 * Time: 10:53
 */

namespace app\lib\exception;


use think\Config;
use think\Exception;
use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;
   public function render(\Exception $e)
   {
       //需要返回客户端当前请求的url的路径
       if($e instanceof BaseException)
       {
           //如果是自定的异常
           $this->code = $e ->code;
           $this->msg  = $e ->msg;
           $this->errorCode = $e ->errorCode;
       }else{
           if(config('app_debug'))
           {
               //return default error page
               return parent::render($e);
           }else
           {
               $this->code = 500;
               $this->msg  = '服务器内部错误';
               $this->errorCode = 9999;
               $this->recordErrorLog($e);
           }

       }
       $request = Request::instance();
       $result = [
           'msg'=>$this->msg,
           'error_code'=>$this->errorCode,
           'request_url'=>$request->url()
       ];
       return json($result,$this->code);
   }

   private function recordErrorLog(\Exception $e)
   {
       Log::init([
           'type'=>'File',
           'path'=>LOG_PATH,
           'level'=>['error']
       ]);
        Log::record($e->getMessage(),'error');
   }
}