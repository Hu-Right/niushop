<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 平台友情链接
 * @author Administrator
 *
 */
class NsPlatformLinkModel extends BaseModel {

    protected $table = 'ns_platform_link';
    protected $rule = [
        'link_id'  =>  '',
    ];
    protected $msg = [
        'link_id'  =>  '',
    ];

}