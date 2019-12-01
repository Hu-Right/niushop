<?php
/**
 * AreaModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 地区表
 */
class NsPickedUpAuditorModel extends BaseModel {

    protected $table = 'ns_picked_up_auditor';
    protected $rule = [
        'auditor_id'  =>  '',
    ];
    protected $msg = [
        'auditor_id'  =>  '',
    ];
}