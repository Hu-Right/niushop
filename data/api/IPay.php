<?php
/**
 * IPay.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\api;

interface IPay
{
    public function doPay($params);

    public function doPayResultCallBack($params);
}

