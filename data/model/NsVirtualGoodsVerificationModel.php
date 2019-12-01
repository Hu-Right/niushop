<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 虚拟商品核销记录表
 * @author Administrator 
 *
 */
class NsVirtualGoodsVerificationModel extends BaseModel {

    protected $table = 'ns_virtual_goods_verification';
    protected $rule = [
        'id'  =>  '',
    ];
    protected $msg = [
        'id'  =>  '',
    ];

}