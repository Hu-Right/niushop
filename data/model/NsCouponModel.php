<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 优惠券表
 * @author Administrator
 *
 */
class NsCouponModel extends BaseModel {

    protected $table = 'ns_coupon';
    protected $rule = [
        'coupon_id'  =>  '',
    ];
    protected $msg = [
        'coupon_id'  =>  '',
    ];

}