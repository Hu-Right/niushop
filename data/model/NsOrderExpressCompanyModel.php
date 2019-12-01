<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 物流公司表
 * @author Administrator
 *
 */
class NsOrderExpressCompanyModel extends BaseModel {
    
    protected $table = 'ns_express_company';
    protected $rule = [
        'co_id'  =>  '',
    ];
    protected $msg = [
        'co_id'  =>  '',
    ];
}