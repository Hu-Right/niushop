<?php
/**
 * User.php
 *
 * @date : 2015.4.24
 * @version : v1.0.0.0
 */
namespace data\service\Applet;

use data\model\WebSiteModel;
use data\service\User;
use data\service\Goods;

class AppletWechat extends User
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * 微信unionid登录(non-PHPdoc)
     *
     * @see \ata\api\IUser::wchatUnionLogin()
     */
    public function wchatAppUnionLogin($unionid)
    {
        $condition = array(
            'wx_unionid' => $unionid
        );
        $user_info = $this->user->getInfo($condition, $field = 'uid,user_status,user_name,is_system,instance_id,is_member, current_login_ip, current_login_time, current_login_type');
        if (! empty($user_info)) {
            if ($user_info['user_status'] == 0) {
                return USER_LOCK;
            } else {
                $this->initLoginInfo($user_info);
                return 10;
            }
        } else
            return USER_NBUND;
    }

    /*
     * 微信第三方登录(non-PHPdoc)
     * @see \data\api\IMember::wchatLogin()
     */
    public function wchatAppLogin($openid, $wx_unionid)
    {
        $condition = array(
            'wx_openid' => $openid
        );
        $user_info = $this->user->getInfo($condition, $field = 'uid,user_status,user_name,is_system,instance_id,is_member, current_login_ip, current_login_time, current_login_type');
        if (! empty($user_info)) {
            if ($user_info['user_status'] == 0) {
                return USER_LOCK;
            } else {
                $this->initLoginInfo($user_info);
                return 1;
            }
        } else {
            if (! empty($wx_unionid)) {
                $res = $this->wchatAppUnionLogin($wx_unionid);
                return $res;
            } else {
                return USER_NBUND;
            }
        }
        
        // TODO Auto-generated method stub
    }

    /**
     * 用户登录之后初始化数据
     * @param unknown $user_info
     */
    private function initLoginInfo($user_info)
    {
        $model = $this->getRequestModel();
        //单店版本
        $website = new WebSiteModel();
        $instance_name = $website->getInfo('', 'title');
        $data = array(
            'last_login_time' => $user_info['current_login_time'],
            'last_login_ip' => $user_info['current_login_ip'],
            'last_login_type' => $user_info['current_login_type'],
            'current_login_ip' => request()->ip(),
            'current_login_time' => time(),
            'current_login_type'  => 1
        );
        if($model != 'app')
        {
            $this->addUserLog($user_info['uid'], 1, '用户', '用户登录', '');
        }
         
        //添加日志
        //离线购物车同步
        $goods = new Goods();
        $goods->syncUserCart($user_info['uid']);
        $retval = $this->user->save($data,['uid' => $user_info['uid']]);
        //用户登录成功钩子
        hook("userLoginSuccess", $user_info);
        return $retval;
    }
    
    /**
     * 获取会员信息通过UniondId
     */
    public function getUserDetailByUnionid($wx_unionid)
    {
        $user_info = $this->user->getInfo(['wx_unionid'=>$wx_unionid],'uid,instance_id');
        return $user_info;
    }
    
    public function getUserDetailByOpenid($openid)
    {
        $user_info = $this->user->getInfo(['wx_openid'=>$openid],'uid,instance_id');
        return $user_info;
    }
}

