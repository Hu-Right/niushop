<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 商品属性规格表
 * @author Administrator
 *
 */
class NsGoodsSpecModel extends BaseModel {

    protected $table = 'ns_goods_spec';
    protected $rule = [
        'spec_id'  =>  '',
    ];
    protected $msg = [
        'spec_id'  =>  '',
    ];

}