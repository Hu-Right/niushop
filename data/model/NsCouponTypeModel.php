<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;
use data\model\BaseModel as BaseModel;
/**
 * 优惠券类型表
 * @author Administrator
 *
 */
class NsCouponTypeModel extends BaseModel {

    protected $table = 'ns_coupon_type';
    protected $rule = [
        'coupon_type_id'  =>  '',
    ];
    protected $msg = [
        'coupon_type_id'  =>  '',
    ];
    /**
     * 获取商品对应优惠券列表
     * @param unknown $goods_id
     * @param unknown $uid
     */
    public function getCouponTypeListByGoods($goods_id)
    {
    
        $list = $this->alias('nct')
        ->join('ns_coupon_goods ncg',' nct.coupon_type_id = ncg.coupon_type_id','left')
        ->field(' nct.coupon_type_id, nct.shop_id, nct.coupon_name, nct.money, nct.count, nct.max_fetch, nct.at_least, nct.need_user_level, nct.range_type, nct.is_show, nct.start_time, nct.end_time, nct.create_time, nct.update_time')
        ->where('(ncg.goods_id = '.$goods_id.' OR nct.range_type = 1) AND nct.is_show = 1 AND (nct.start_time <= UNIX_TIMESTAMP(NOW()) AND nct.end_time >= UNIX_TIMESTAMP(NOW()) OR nct.term_of_validity_type = 1)')->select();
        return $list;
    }

}