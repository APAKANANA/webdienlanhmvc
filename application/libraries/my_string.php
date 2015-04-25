<?php
class my_string
{
	private $CI;
	public function __construct(){
		$this->CI=& get_instance();
	}
	public function random($leng=10,$char=FALSE)
	{
		IF($char==FALSE) $s='QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789?:#!@';
		else $s='QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789';
		mt_rand((double)microtime(),1000000);
		$salt="";
		for($i=0;$i<$leng;$i++)
		{
			$salt=$salt.substr($s,(mt_rand()%(strlen($s))),1);
		}
		return $salt;
	}
	public function encryption($password='',$salt='')
	{
		return md5($salt.md5($salt.$password.$salt).$salt);
	}
	public function js_thongbao($alert,$url)
	{
		die('<meta charset="utf-8"><script type="text/javascript">alert(\''.$alert.'\');location.href = \''.$url.'\';</script>');
	}
}
?>