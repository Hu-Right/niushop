<?php
/**
 * Index.php
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace app\wap\controller;

/**
 * 首页控制器
 * 创建人：王永杰
 * 创建时间：2017年2月6日 11:01:19
 */
class Error extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function _empty($name)
    {
        $this->redirect(__URL(__URL__));
    }
}