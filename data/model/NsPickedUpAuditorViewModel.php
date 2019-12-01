<?php
/**
 * AreaModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 地区表
 */
class NsPickedUpAuditorViewModel extends BaseModel {

    protected $table = 'ns_picked_up_auditor';
    
    /**
    * 获取列表返回数据格式
    * @param unknown $page_index
    * @param unknown $page_size
    * @param unknown $condition
    * @param unknown $order
    * @return unknown
    */
    public function getViewList($page_index, $page_size, $condition, $order){
    
        $queryList = $this->getViewQuery($page_index, $page_size, $condition, $order);
        $queryCount = $this->getViewCount($condition);
        $list = $this->setReturnList($queryList, $queryCount, $page_size);
        return $list;
    }
    /**
     * 获取列表
     * @param unknown $page_index
     * @param unknown $page_size
     * @param unknown $condition
     * @param unknown $order
     * @return \data\model\multitype:number
     */
    public function getViewQuery($page_index, $page_size, $condition, $order)
    {
        //设置查询视图
        $viewObj = $this->alias('npua')
        ->join('ns_pickup_point npp','npua.pickup_id = npp.id','left')
        ->join('sys_user su', 'npua.uid = su.uid', 'left')
        ->field('npua.auditor_id, npua.uid, npua.pickup_id, su.nick_name, npua.create_time, npp.name, su.nick_name');
        $list = $this->viewPageQuery($viewObj, $page_index, $page_size, $condition, $order);
        return $list;
    }
    /**
     * 获取列表数量
     * @param unknown $condition
     * @return \data\model\unknown
     */
    public function getViewCount($condition)
    {
        $viewObj = $this->alias('npua')
        ->join('ns_pickup_point npp','npua.pickup_id = npp.id','left')
        ->field('npua.auditor_id');
        $count = $this->viewCount($viewObj,$condition);
        return $count;
    }
    
    public function getViewInfo($condition){
        $result = $viewObj = $this->alias('npua')
        ->join('ns_pickup_point npp','npua.pickup_id = npp.id','left')
        ->join('sys_user su', 'npua.uid = su.uid', 'left')
        ->field('npua.auditor_id, npua.uid, npua.pickup_id, su.nick_name, npua.create_time, npp.name, su.nick_name')
        ->find();
        return $result;
    }
}