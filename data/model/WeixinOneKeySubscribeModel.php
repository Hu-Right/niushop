<?php
/**
 * WeixinOneKeySubscribeModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;
use data\model\BaseModel as BaseModel;
/**
 * 微信一键关注
 *
 */
class WeixinOneKeySubscribeModel extends BaseModel {
    protected $table = 'sys_wexin_onekeysubscribe';
    protected $rule = [
        'instance_id'  =>  '',
    ];
    protected $msg = [
        'instance_id'  =>  '',
    ];
}