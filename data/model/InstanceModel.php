<?php
/**
 * InstanceModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;
use think\Db;
use data\model\BaseModel as BaseModel;
/**
 * 系统实例表
 */
class InstanceModel extends BaseModel {

    protected $table = 'sys_instance';
    protected $rule = [
        'instance_id'  =>  '',
    ];
    protected $msg = [
        'instance_id'  =>  '',
    ];
}