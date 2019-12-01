<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 商城利润记录
 * @author Administrator
 *
 */
class NsAccountReturnRecordsModel extends BaseModel {

    protected $table = 'ns_account_return_records';
    protected $rule = [
        'id'  =>  '',
    ];
    protected $msg = [
        'id'  =>  '',
    ];

}