<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 平台 --商家在平台的提现记录
 * @author Administrator
 *
 */
class NsAccountWithdrawRecordsModel extends BaseModel {

    protected $table = 'ns_account_withdraw_records';
    protected $rule = [
        'id'  =>  '',
    ];
    protected $msg = [
        'id'  =>  '',
    ];

}