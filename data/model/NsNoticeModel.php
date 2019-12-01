<?php
/**
 * CityModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;

use data\model\BaseModel as BaseModel;
/**
  * 店铺公告表
 */

class NsNoticeModel extends BaseModel {

    protected $table = 'ns_notice';
    protected $rule = [
        'id'  =>  '',
        'notice_content'  =>  'no_html_parse',
    ];
    protected $msg = [
        'id'  =>  '',
        'notice_content'  =>  'no_html_parse',
    ];
}