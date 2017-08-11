<?php
/**
 * Created by weifan.
 * User: Administrator
 * Date: 2017/7/5
 * Time: 9:29
 */
namespace app\api\controller\v1;
use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use think\Exception;

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
        (new IDMustBePostiveInt())->goCheck();
        $banner = BannerModel::get($id);
        if(!$banner)
        {
            throw new BannerMissException();
        }
        return $banner;
    }
}