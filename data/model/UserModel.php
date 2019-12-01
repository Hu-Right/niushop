<?php
/**
 * UserModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;
use think\Db;
use data\model\BaseModel as BaseModel;
/**
 * 用户表
 */
class UserModel extends BaseModel {
    protected $table = 'sys_user';
    protected $rule = [
        'uid'  =>  '',
        'qq_info' => 'no_html_parse',
        'wx_info' => 'no_html_parse'
    ];
    protected $msg = [
        'uid'  =>  '',
        'qq_info' => 'no_html_parse',
        'wx_info' => 'no_html_parse'
    ];
 
}
