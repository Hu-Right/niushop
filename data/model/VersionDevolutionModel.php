<?php
/**
 * WeixinAuthModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;
use data\model\BaseModel as BaseModel;
/**
 * 版本授权
 *
 */
class VersionDevolutionModel extends BaseModel {
    protected $table = 'sys_version_devolution';
    protected $rule = [
        'id'  =>  '',
    ];
    protected $msg = [
        'id'  =>  '',
    ];
}

