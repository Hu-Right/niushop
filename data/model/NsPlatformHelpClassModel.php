<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 平台说明类型表
 * @author Administrator
 *
 */
class NsPlatformHelpClassModel extends BaseModel {

    protected $table = 'ns_platform_help_class';
    protected $rule = [
        'class_id'  =>  '',
    ];
    protected $msg = [
        'class_id'  =>  '',
    ];

}