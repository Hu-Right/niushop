<?php
/**
 * ModuleModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;
use think\Db;
use data\model\BaseModel as BaseModel;
/**
 * 系统模块表
 * @author Administrator
 *
 */
class NoticeModel extends BaseModel
{
    protected  $table = 'sys_notice';
    protected $rule = [
        'id'  =>  '',
    ];
    protected $msg = [
        'id'  =>  '',
    ];
}