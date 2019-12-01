<?php
/**
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * App升级管理表
 *  
  id int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  type varchar(255) NOT NULL COMMENT 'App类型，Android，IOS',
  version_number varchar(255) NOT NULL COMMENT '版本号',
  download_address varchar(255) NOT NULL COMMENT 'app下载地址',
  create_time int(11) NOT NULL COMMENT '创建时间',
  update_log varchar(255) DEFAULT '' COMMENT '更新日志',
  remark varchar(255) DEFAULT '' COMMENT '备注',
  PRIMARY KEY (id)
 * @author Administrator
 *
 */
class NsAppUpgradeModel extends BaseModel {

    protected $table = 'sys_app_upgrade';
    protected $rule = [
        'id'  =>  '',
    ];
    protected $msg = [
        'id'  =>  '',
    ];

}