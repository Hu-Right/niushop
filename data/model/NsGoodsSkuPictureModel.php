<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 商品sku表
 * @author Administrator
 *
 */
class NsGoodsSkuPictureModel extends BaseModel {

    protected $table = 'ns_goods_sku_picture';
    protected $rule = [
        'id'  =>  '',
    ];
    protected $msg = [
        'id'  =>  '',
    ];

}