<?php
/**
 * IGoodsGroup.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\api;
/**
 * 商品店铺分组管理（用于前台显示）
 */
interface IGoodsGroup
{
    /**
     * 获取商品分组列表
     * @param number $page_index
     * @param number $page_size
     * @param string $condition
     * @param string $order
     * @param string $field
     */
    function getGoodsGroupList($page_index=1, $page_size=0, $condition = '', $order = '', $field = '*');
    
    /**
     * 添加或修改商品分组
     *  group_id int(11) NOT NULL AUTO_INCREMENT,
          shop_id int(11) NOT NULL,
          group_name varchar(50) NOT NULL DEFAULT '' COMMENT '分类名称',
          pid int(11) NOT NULL DEFAULT 0 COMMENT '上级id 最多2级',
          level tinyint(4) NOT NULL DEFAULT 0 COMMENT '级别',
          is_visible bit(1) NOT NULL DEFAULT b'1' COMMENT '是否可视',
          sort tinyint(4) NOT NULL DEFAULT 0 COMMENT '排序',
     */
    function addOrEditGoodsGroup($group_id, $shop_id, $group_name, $pid, $is_visible, $sort, $group_pic, $group_dec);
    
    /**
     * 删除商品分组
     * @param unknown $goods_group_id_array
     */
    function deleteGoodsGroup($goods_group_id_array, $shop_id);
	
	/**
	 * 获取商品分组的子分类(一级)
	 */
	function getGoodsGroupListByParentId($shop_id, $pid);
	/**
	 * 获取分组详情
	 * @param unknown $group_id
	 */
	function getGoodsGroupDetail($group_id);
	/**
	 * 修改 商品分组 单个字段
	 */
	function ModifyGoodsGroupField($group_id, $field_name, $field_value);
	/**
	 * 返回二级 分组 列表
	 * @param unknown $shop_id
	 */
	function getGoodsGroupQuery($shop_id);
	/**
	 * 查询分组商品列表数据结构
	 * @param unknown $shop_id
	 */
	function getGroupGoodsTree($shop_id);
	/**
	 *查询商品分组
	 * @param unknown $condition
	 */
	function getGoodsGroupQueryList($condition);
}