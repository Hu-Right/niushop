<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;

/**
 * 团购主表
 * 
 * @author Administrator
 *        
 */
class NsPromotionTuangouModel extends BaseModel
{

    protected $table = 'ns_promotion_tuangou';

    protected $rule = [
        'tuangou_content_json' => 'no_html_parse'
    ];

    protected $msg = [
        'tuangou_content_json' => ''
    ];
}