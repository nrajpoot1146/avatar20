<?php
namespace lib;
class Rout{
	public static $ptr;
	static function get($str,$fun){
		self::$ptr->get($str,$fun);
	}
	static function post($str,$fun){
		self::$ptr->post($str,$fun);
	}
	static function resolve(){
		self::$ptr->__destruct();
	}
}
?>
