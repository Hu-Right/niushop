<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 商品属性表
 * @author Administrator
 *
 */
class NsGoodsAttributeModel extends BaseModel {

    protected $table = 'ns_goods_attribute';
    protected $rule = [
        'attr_id'  =>  '',
    ];
    protected $msg = [
        'attr_id'  =>  '',
    ];

}