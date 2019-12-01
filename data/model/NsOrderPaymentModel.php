<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 订单支付表
 *  
 */
class NsOrderPaymentModel extends BaseModel {

    protected $table = 'ns_order_payment';
    protected $rule = [
        'out_trade_no'  =>  '',
    ];
    protected $msg = [
        'out_trade_no'  =>  '',
    ];

}