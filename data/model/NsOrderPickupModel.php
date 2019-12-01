<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;

/**
 * 订单自提点管理
 * 
 * @author Administrator
 *        
 */
class NsOrderPickupModel extends BaseModel
{

    protected $table = 'ns_order_pickup';

    protected $rule = [
        'id' => ''
    ];

    protected $msg = [
        'id' => ''
    ];
}