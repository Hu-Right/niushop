<?php
/**
 * WeixinQrcodeConfigModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;
use data\model\BaseModel as BaseModel;
/**
 * 微信模板消息
 *
 */
class WeixinInstanceMsgModel extends BaseModel {
     protected $table = 'sys_weixin_instance_msg';
     protected $rule = [
         'id'  =>  '',
     ];
     protected $msg = [
         'id'  =>  '',
     ];
}