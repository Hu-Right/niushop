<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 商品评论记录表
 * @author Administrator
 *
 */
class NsGoodsCommentModel extends BaseModel {
    protected $table = 'ns_goods_comment';
    protected $rule = [
        'id'  =>  '',
    ];
    protected $msg = [
        'id'  =>  '',
    ];

}