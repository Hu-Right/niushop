<?php
/**
 * NsPromotionBargainPartakeModel.php
 *
 * @date : 2017.12.5
 * @version : v1.0.0.0
 */

namespace data\model;
use data\model\BaseModel as BaseModel;
/**
 * 砍价参与表
 */

class NsPromotionBargainPartakeModel extends BaseModel {

    protected $table = 'ns_promotion_bargain_partake';
    protected $rule = [
        'partake_id'  =>  '',
    ];
    protected $msg = [
        'partake_id'  =>  '',
    ];
}