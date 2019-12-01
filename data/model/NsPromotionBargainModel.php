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
 * 砍价活动表
 */

class NsPromotionBargainModel extends BaseModel {

    protected $table = 'ns_promotion_bargain';
    protected $rule = [
        'bargain_id'  =>  '',
    ];
    protected $msg = [
        'bargain_id'  =>  '',
    ];
}