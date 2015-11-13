<?php
/**
 * Created by AliBaichuan (http://baichuan.taobao.com).
 * Modifier by Yong
 * HomePage: https://github.com/yocome
 * Date: 2015/11/13
 */
namespace Yocome\Baichuan\Sms;

/**
 * TOP API: taobao.open.sms.sendmsg request
 * 
 * @author auto create
 * @since 1.0, 2015.11.04
 */
class OpenSmsSendmsgRequest
{
	/** 
	 * 发送短信请求
	 **/
	private $sendMessageRequest;
	
	private $apiParas = array();

	/**
	 * @param $sendMessageRequest
	 */
	public function setSendMessageRequest($sendMessageRequest)
	{
		$this->sendMessageRequest = $sendMessageRequest;
		$this->apiParas["send_message_request"] = $sendMessageRequest;
	}

	/**
	 * @return mixed
	 */
	public function getSendMessageRequest()
	{
		return $this->sendMessageRequest;
	}

	/**
	 * @return string
	 */
	public function getApiMethodName()
	{
		return "taobao.open.sms.sendmsg";
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
