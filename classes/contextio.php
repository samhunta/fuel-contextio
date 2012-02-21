<?php

namespace ContextIO;

class ContextIO
{
	/**
	 * @var ContextIOClient
	 */
	private static $_instance;

	/**
	 * Initialize FuelPHP package and vendor library
	 *
	 * @return void
	 */
	public static function _init()
	{
		\Config::load('contextio', 'contextio');
		self::$_instance = static::forge();
	}

	/**
	 * Inhibits new instances from being created
	 *
	 * @return void
	 * @throws Exception
	 */
	final public function __construct() { }
	
	/**
	 * Alias for 'forge'
	 *
	 * @param [$config]
	 * @param [$secret] 
	 * @return ContextIOClient
	 */
	public static function factory( $config = array(), $secret = null )
	{
		return static::forge( $config, $secret );
	}
	
	/**
	 * Create an instance of ContextIOClient
	 *
	 * @param [$config]
	 * @param [$secret]
	 * @return ContextIOClient
	 */
	public static function forge( $config = array(), $secret = null )
	{
		return new ContextIOClient( $config, $secret );
	}
	
	/**
	 * Singleton
	 *
	 * @param void
	 * @return 
	 */
	public static function instance()
	{
		return self::$_instance;
	}

	public static function __callStatic($method, $arguments)
	{
		return call_user_func_array(array(static::$_instance, $method), $arguments);
	}
}