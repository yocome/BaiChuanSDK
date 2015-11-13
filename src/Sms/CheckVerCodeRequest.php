<?php
/**
 * Created by AliBaichuan (http://baichuan.taobao.com).
 * Modifier by Yong
 * HomePage: https://github.com/yocome
 * Date: 2015/11/13
 */
namespace Yocome\Baichuan\Sms;

/**
 * 验证验证码
 * @author auto create
 */
class CheckVerCodeRequest
{
	
	/** 
	 * app key
	 **/
	public $app_key;
	
	/** 
	 * 业务类型
	 **/
	public $biz_type;
	
	/** 
	 * 最多验证错误几次
	 **/
	public $check_fail_limit;
	
	/** 
	 * 最多验证成功几次
	 **/
	public $check_success_limit;
	
	/** 
	 * 短信验证码域
	 **/
	public $domain;
	
	/** 
	 * 手机号
	 **/
	public $mobile;
	
	/** 
	 * isv user id
	 **/
	public $user_id;
	
	/** 
	 * 验证码
	 **/
	public $ver_code;	
}
?>