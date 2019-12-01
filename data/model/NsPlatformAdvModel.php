<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 平台广告
 * @author Administrator
 *
 */
class NsPlatformAdvModel extends BaseModel {

    protected $table = 'ns_platform_adv';
    protected $rule = [
        'adv_id'  =>  '',
    ];
    protected $msg = [
        'adv_id'  =>  '',
    ];

}