<?php
namespace singleton;

class Singleton
{
	private static $instance = [];

	public static function getInstance()
	{
		$class = get_called_class();
		if(!isset(self::$instance[$class])){
			self::$instance[$class] = new static();
		}
		return self::$instance[$class];
	}

	private function __construct()
	{
		$class = get_called_class();
		if(isset(self::$instance[$class])){
			throw new Exception('new not support');
		}
		static::init();
	}

	protected function init()
	{}

	private function __clone()
	{}

	private function __wakeup()
	{}
}

