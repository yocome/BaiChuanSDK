<?php
/**
 * Created by AliBaichuan (http://baichuan.taobao.com).
 * Modifier by Yong
 * HomePage: https://github.com/yocome
 * Date: 2015/11/13
 */
namespace Yocome\Baichuan\Sms;

/**
 * TOP API: taobao.open.sms.sendvercode request
 * 
 * @author auto create
 * @since 1.0, 2015.11.04
 */
class OpenSmsSendvercodeRequest
{
	/** 
	 * 发送验证码请求
	 **/
	private $sendVerCodeRequest;
	
	private $apiParas = array();

	/**
	 * @param $sendVerCodeRequest
	 */
	public function setSendVerCodeRequest($sendVerCodeRequest)
	{
		$this->sendVerCodeRequest = $sendVerCodeRequest;
		$this->apiParas["send_ver_code_request"] = $sendVerCodeRequest;
	}

	/**
	 * @return mixed
	 */
	public function getSendVerCodeRequest()
	{
		return $this->sendVerCodeRequest;
	}

	/**
	 * @return string
	 */
	public function getApiMethodName()
	{
		return "taobao.open.sms.sendvercode";
	}

	/**
	 * @return array
	 */
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}

	/**
	 * @param $key
	 * @param $value
	 */
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
