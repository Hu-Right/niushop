<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 平台订单资金记录
 * @author Administrator
 *
 */
class NsAccountOrderRecordsModel extends BaseModel {

    protected $table = 'ns_account_order_records';
    protected $rule = [
        'id'  =>  '',
    ];
    protected $msg = [
        'id'  =>  '',
    ];

}