<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;

class NsConsultTypeModel extends BaseModel {

    protected $table = 'ns_consult_type';
    protected $rule = [
        'ct_id'  =>  '',
    ];
    protected $msg = [
        'ct_id'  =>  '',
    ];
    

}