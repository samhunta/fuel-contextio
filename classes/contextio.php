<?php

namespace ContextIO;

class ContextIO
{
	private static $_instance;

	/**
	 * Initialise FuelPHP package and vendor library
	 * @return void
	 */
	public static function _init()
	{
		self::$_instance = new ContextIOClient();
		return self::$_instance;
	}

	public static function __callStatic($method, $arguments)
	{
		return call_user_func_array(array(self::$_instance, $method), $arguments);
	}
}