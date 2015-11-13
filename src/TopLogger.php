<?php
/**
 * Created by AliBaichuan (http://baichuan.taobao.com).
 * Modifier by Yong
 * HomePage: https://github.com/yocome
 * Date: 2015/11/13
 */
namespace Yocome\Baichuan;

/**
 * Class TopLogger
 * @package Yocome\Baichuan
 */
class TopLogger
{
	public $conf = array(
		"separator" => "\t",
		"log_file" => ""
	);

	private $fileHandle;

	/**
	 * 获取文件名柄
	 * @return resource
	 */
	protected function getFileHandle()
	{
		if (null === $this->fileHandle)
		{
			if (empty($this->conf["log_file"]))
			{
				trigger_error("no log file spcified.");
			}
			$logDir = dirname($this->conf["log_file"]);
			if (!is_dir($logDir))
			{
				mkdir($logDir, 0777, true);
			}
			$this->fileHandle = fopen($this->conf["log_file"], "a");
		}
		return $this->fileHandle;
	}

	/**
	 * 写入日志文件
	 * @param $logData
	 * @return bool
	 */
	public function log($logData)
	{
		if ("" == $logData || array() == $logData)
		{
			return false;
		}
		if (is_array($logData))
		{
			$logData = implode($this->conf["separator"], $logData);
		}
		$logData = $logData. "\n";
		fwrite($this->getFileHandle(), $logData);
	}
}
?>