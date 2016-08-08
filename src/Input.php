<?php
class Input {
		/**
	 * Check if a given value was passed in the request
	 *
	 * @param string $key index to look for in request
	 * @return boolean whether value exists in $_POST or $_GET
	 */
	/**
	 * Get a requested value from either $_POST or $_GET
	 *
	 * @param string $key index to look for in index
	 * @param mixed $default default value to return if key not found
	 * @return mixed value passed in request
	 */
	public static function has($key) {
		return isset($_REQUEST[$key]);
	}
	public static function get($key, $default = null) {
		return static::has($key) ? $_REQUEST[$key] : $default;
	}
	public static function isPost(){
	 	return $_SERVER['REQUEST_METHOD'] === 'POST';
	}
	public static function getString($key) {
		$value = static::get($key);
		if(!is_string($value)) {
			throw new Exception("$key should be a string");
		}
		return trim($value);
	}
	public static function getNumber($key, $default = 0) {
		$value = static::get($key, $default);
		if(!is_numeric($value)) {
			throw new Exception("$key should be a number");
		}
		return floatval($value);
	}
	public static function getDate($key) {
		$value = static::get($key);
		if(!strtotime($value)) {
			throw new Exception("$key should be a date");
		}
		$date = new DateTime($value);
		return $date->format('Y-m-d');
	}
	public static function isPost() {
		return !empty($_POST);
	}
	
// 	private function __construct() {}
// }