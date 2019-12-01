<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 会员充值纪录
 * @author Administrator
 *
 */
class NsMemberRechargeModel extends BaseModel {
    protected $table = 'ns_member_recharge';
    protected $rule = [
        'id'  =>  '',
    ];
    protected $msg = [
        'id'  =>  '',
    ];
}