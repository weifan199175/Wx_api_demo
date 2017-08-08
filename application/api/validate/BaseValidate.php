<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/6
 * Time: 16:16
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
   public function goCheck()
   {
       //获取http传入的参数
       //对这些参数做检验
       $request = Request::instance();
       $params = $request->param();

       $result = $this->batch()->check($params);
       if(!$result)
       {
           $e = new ParameterException([
               'msg'=>$this->error,
           ]);
//           $e->msg = $this->error;
           throw $e;
//           $error = $this->error;
//           throw new Exception($error);
       }else{
           return true;
       }
   }
}