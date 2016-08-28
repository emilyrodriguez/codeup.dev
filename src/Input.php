<?php
class InvalidArgumentException extends Exception { }
class OutOfRangeException extends Exception  { }
class DomainException extends Exception { }
class LengthException extends Exception { }
class RangeException extends LengthException { }

class Input {
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
			throw new InvalidArgumentException ("$key should be a string");
		}
		return trim($value);
	}
	public static function getNumber($key, $default = 0, $min=1, $max=150) {
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

	try {
		$test = new Input("Emily");
	} catch(DomainException $e) {
		echo "$value is the wrong type!";
	} catch(InvalidArgumentException $e) {
		echo "$min and $max are not numbers!";
	} catch(LengthException $e) {
		echo "String is shorter than $min or longer than $max!";
	} catch(OutOfRangeException $e) {
		echo "$key is missing from input!";
	} catch(RangeException $e) {
		echo "Number is less than $min or larger than $max!";
	} catch (Exception $e) {
		echo "An error occured: " . $e->getMessage() . PHP_EOL;
	}

}
	
// 	private function __construct() {}
// }