<?php
/**
 * NsPromotionBargainLaunchModel.php
 *
 * @date : 2017.12.5
 * @version : v1.0.0.0
 */

namespace data\model;
use data\model\BaseModel as BaseModel;
/**
 * 砍价发起表
 */

class NsPromotionBargainLaunchModel extends BaseModel {

    protected $table = 'ns_promotion_bargain_launch';
    protected $rule = [
        'launch_id'  =>  '',
    ];
    protected $msg = [
        'launch_id'  =>  '',
    ];
}