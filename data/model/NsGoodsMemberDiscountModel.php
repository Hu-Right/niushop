<?php
/**
 * NcCmsArticleClassModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;

use data\model\BaseModel as BaseModel;
use think\Validate;
/**
 * cms文章分类表
 *  
 */

class NsGoodsMemberDiscountModel extends BaseModel{
    protected $table = 'ns_goods_member_discount';
    protected $rule = [
        'discount_id'  =>  '',
        
    ];
    protected $msg = [
        'discount_id'  =>  '',
    ];
}