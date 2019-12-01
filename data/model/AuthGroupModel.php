<?php
/**
 * AuthGroupModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 用户组
 *
 */
class AuthGroupModel extends BaseModel {
    
    protected $table = 'sys_user_group';
    protected $rule = [
        'group_id'  =>  '',
    ];
    protected $msg = [
        'group_id'  =>  '',
    ];
}