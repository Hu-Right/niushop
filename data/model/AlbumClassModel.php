<?php
/**
 * AlbumClassModel.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */

namespace data\model;
use think\Db;
use data\model\BaseModel as BaseModel;
/**
 * 相册module
 */

class AlbumClassModel extends BaseModel {

    protected $table = 'sys_album_class';
    protected $rule = [
        'album_id'  =>  '',
    ];
    protected $msg = [
        'album_id'  =>  '',
    ];
}