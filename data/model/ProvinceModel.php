<?php
/**
 * ProvinceModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;
use think\Db;
use data\model\BaseModel as BaseModel;
/**
 * 地区省表
 */
class ProvinceModel extends BaseModel {

    protected $table = 'sys_province';
    protected $rule = [
        'province_id'  =>  '',
    ];
    protected $msg = [
        'province_id'  =>  '',
    ];
}