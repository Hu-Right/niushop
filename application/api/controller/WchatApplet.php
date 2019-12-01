<?php
/**
 * Index.php
 * @date : 2015.1.17
 * @version : v1.0.0.0
 */
namespace app\api\controller;

class WchatApplet
{

    private $appid;

    private $sessionKey;

    /**
     * error code 说明.
     * <ul>
     *
     * <li>-41001: encodingAesKey 非法</li>
     * <li>-41002: aes 解密失败</li>
     * <li>-41003: 解密后得到的buffer非法</li>
     * <li>-41014: base64解密失败</li>
     * </ul>
     */
    private $OK = 0;

    private $IllegalAesKey = - 41001;

    private $IllegalIv = - 41002;

    private $IllegalBuffer = - 41003;

    private $DecodeBase64Error = - 41004;

    /**
     * 构造函数
     * 
     * @param $sessionKey string
     *            用户在小程序登录后获取的会话密钥
     * @param $appid string
     *            小程序的appid
     */
    public function __construct($appid, $sessionKey)
    {
        $this->sessionKey = $sessionKey;
        $this->appid = $appid;
    }

    /**
     * 检验数据的真实性，并且获取解密后的明文.
     * 
     * @param $encryptedData string
     *            加密的用户数据
     * @param $iv string
     *            与用户数据一同返回的初始向量
     * @param $data string
     *            解密后的原文
     *            
     * @return int 成功0，失败返回对应的错误码
     */
    public function decryptData($encryptedData, $iv, &$data)
    {
        if (strlen($this->sessionKey) != 24) {
            return $this->IllegalAesKey;
        }
        $aesKey = base64_decode($this->sessionKey);
        
        if (strlen($iv) != 24) {
            return $this->IllegalIv;
        }
        $aesIV = base64_decode($iv);
        
        $aesCipher = base64_decode($encryptedData);
        
        $result = openssl_decrypt($aesCipher, "AES-128-CBC", $aesKey, 1, $aesIV);
        
        $dataObj = json_decode($result);
        if ($dataObj == NULL) {
            return $this->IllegalBuffer;
        }
        if ($dataObj->watermark->appid != $this->appid) {
            return $this->IllegalBuffer;
        }
        $data = $result;
        return $this->OK;
    }

    /**
     * 获取用户微信信息
     */
    public function getWchatInfo($encryptedData, $iv, $data)
    {
        $errCode = $this->decryptData($encryptedData, $iv, $data);
        if ($errCode == 0) {
            return $data;
        } else {
            return $errCode;
        }
    }
}