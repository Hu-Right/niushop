<?php
/**
 * NcCmsArticleModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;

use data\model\BaseModel as BaseModel;

/**
 * 主题表
 * @author Administrator
 *
 */
class NcCmsTopicModel extends BaseModel{
    protected $table = 'nc_cms_topic';
    protected $rule = [
        'topic_id'  =>  '',
        'content'  =>  'no_html_parse',
    ];
    protected $msg = [
        'topic_id'  =>  '',
        'content'  =>  '',
    ];
}