<?php
/**
 * INotice.php
 *
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace data\api;

/**
 * 通知的接口
 */
interface INotice
{
    /**
     * 添加通知记录
     * @param unknown $shop_id
     * @param unknown $uid
     * @param unknown $send_type
     * @param unknown $send_account
     * @param unknown $notice_title
     * @param unknown $notice_context
     */
    function createNoticeRecords($shop_id, $uid, $send_type, $send_account, $notice_title, $notice_context, $records_type, $send_config, $is_send);
    /**
     * 发送通知
     */
    function sendNoticeRecords();
}

