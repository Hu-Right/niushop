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
 * 地区市表
 */

class CityModel extends BaseModel {

    protected $table = 'sys_city';
    protected $rule = [
        'city_id'  =>  '',
    ];
    protected $msg = [
        'city_id'  =>  '',
    ];
}