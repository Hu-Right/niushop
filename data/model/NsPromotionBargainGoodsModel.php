<?php
/**
 * NewModel.php
 *
 * @date : 2017.12.5
 * @version : v1.0.0.0
 */

namespace data\model;
use data\model\BaseModel as BaseModel;
/**
 * 参与砍价活动的商品
 */

class NsPromotionBargainGoodsModel extends BaseModel {

    protected $table = 'ns_promotion_bargain_goods';
    protected $rule = [
        'bargain_goods_id'  =>  '',
    ];
    protected $msg = [
        'bargain_goods_id'  =>  '',
    ];
}