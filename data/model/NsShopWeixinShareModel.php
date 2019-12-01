<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 店铺分享设置
 * @author Administrator
 *
 */
class NsShopWeixinShareModel extends BaseModel {

    protected $table = 'ns_shop_weixin_share';
    protected $rule = [
        'shop_id'  =>  '',
    ];
    protected $msg = [
        'shop_id'  =>  '',
    ];

}