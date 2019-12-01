<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;

class NsConsultModel extends BaseModel {

    protected $table = 'ns_consult';
    protected $rule = [
        'consult_id'  =>  '',
    ];
    protected $msg = [
        'consult_id'  =>  '',
    ];

}