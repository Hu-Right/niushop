<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 平台商品推荐
 * @author Administrator
 *
 */
class NsPlatformGoodsRecommendModel extends BaseModel {

    protected $table = 'ns_platform_goods_recommend';
    protected $rule = [
        'recommend_id'  =>  '',
    ];
    protected $msg = [
        'recommend_id'  =>  '',
    ];
  

}