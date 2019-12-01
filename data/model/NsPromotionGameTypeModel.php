<?php
/**
 * NsPromotionGameTypeModel.php
 *
 * @date : 2017.12.5
 * @version : v1.0.0.0
 */

namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 营销游戏类型
 */

class NsPromotionGameTypeModel extends BaseModel {

    protected $table = 'ns_promotion_game_type';
    protected $rule = [
        'game_type'  =>  '',
    ];
    protected $msg = [
        'game_type'  =>  '',
    ];
}