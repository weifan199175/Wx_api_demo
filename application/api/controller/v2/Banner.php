<?php
/**
 * Created by weifan.
 * User: Administrator
 * Date: 2017/7/5
 * Time: 9:29
 */
namespace app\api\controller\v2;

class Banner
{
    /*
     * 获取指定的ID的banner 信息
     * @id banner的ID好
     * @http GET
     * @url /banner/:id
     * */
    public function getBanner($id)
    {
        return "this is v2 vision";
    }
}