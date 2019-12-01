<?php
/**
 * WeixinQrcodeTemplateModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 微信推广二维码模板管理
 *
 */
class WeixinQrcodeTemplateModel extends BaseModel {
    
    protected $table = 'sys_weixin_qrcode_template';
    protected $rule = [
        'id'  =>  '',
    ];
    protected $msg = [
        'id'  =>  '',
    ];

}