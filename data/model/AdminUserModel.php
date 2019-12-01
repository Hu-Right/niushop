<?php
/**
 * AdminUserModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 后台用户表
 */
class AdminUserModel extends BaseModel {
    
    protected $table = 'sys_user_admin';
    protected $rule = [
        'uid'  =>  '',
    ];
    protected $msg = [
        'uid'  =>  '',
    ];
}