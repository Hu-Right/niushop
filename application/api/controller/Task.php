<?php
/**
 * Login.php
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
/**
 * 后台登录控制器
 */
namespace app\api\controller;

use data\service\Config;
use data\service\Upgrade;
use think\Cache;
use think\Log;
use data\service\WebSite;
\think\Loader::addNamespace('data', 'data/');

/**
 * 执行定时任务
 *
 * @author Administrator
 *        
 */
class Task extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 加载执行任务
     */
    public function load_task()
    {
        $redirect = __URL(__URL__ . "/wap/Task/event");
        http($redirect, $timeout = 1); 
        return 1;
    }

    /**
     * 当前用户是否授权
     */
    // public function copyRightIsLoad()
    // {
    //     $title = '底部加载';
    //     $upgrade = new Upgrade();
    //     $is_load = $upgrade->isLoadCopyRight();
    //     $website = new WebSite();
    //     $web_site_info = $website->getWebSiteInfo();
    //     $result = array(
    //         "is_load" => $is_load
    //     );
    //     $bottom_info = array();
    //     if ($is_load == 0) {
    //         $config = new Config();
    //         $bottom_info = $config->getCopyrightConfig(0);
    //         $bottom_info["copyright_logo"] = $bottom_info["copyright_logo"];
    //     }
    //     if (! empty($web_site_info["web_icp"])) {
    //         $bottom_info['copyright_meta'] = $web_site_info["web_icp"];
    //     } else {
    //         $bottom_info['copyright_meta'] = '';
    //     }
    //     $bottom_info['web_gov_record'] = $web_site_info["web_gov_record"];
    //     $bottom_info['web_gov_record_url'] = $web_site_info["web_gov_record_url"];
        
    //     $result["bottom_info"] = $bottom_info;
    //     $result["default_logo"] = "/blue/img/logo.png";
    //     return $this->outMessage($title, $result);
    // }
}
