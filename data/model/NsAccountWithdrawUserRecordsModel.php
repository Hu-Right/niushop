<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 会员针对平台的提现记录表
 * @author Administrator
 *
 */
class NsAccountWithdrawUserRecordsModel extends BaseModel {

    protected $table = 'ns_account_withdraw_user_records';
    protected $rule = [
        'id'  =>  '',
    ];
    protected $msg = [
        'id'  =>  '',
    ];

}