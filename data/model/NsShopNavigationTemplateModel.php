<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 店铺导航  商场模块
 */
class NsShopNavigationTemplateModel extends BaseModel {

    protected $table = 'ns_shop_navigation_template';
    protected $rule = [
        'template_id'  =>  '',
    ];
    protected $msg = [
        'template_id'  =>  '',
    ];
}