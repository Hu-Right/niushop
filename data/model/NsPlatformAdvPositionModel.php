<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 平台广告位
 * @author Administrator
 *
 */
class NsPlatformAdvPositionModel extends BaseModel {

    protected $table = 'ns_platform_adv_position';
    protected $rule = [
        'ap_id'  =>  '',
    ];
    protected $msg = [
        'ap_id'  =>  '',
    ];

}