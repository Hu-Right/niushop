<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 招商员支付金额记录表
 * @author Administrator
 *
 */
class NsAccountAssistantRecordsModel extends BaseModel {

    protected $table = 'ns_account_assistant_records';
    protected $rule = [
        'id'  =>  '',
    ];
    protected $msg = [
        'id'  =>  '',
    ];

}