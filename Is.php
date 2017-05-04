<?php

/**
 * Is Helper
 *
 **/
Class Is {

	/**
	 * Return true only if $value is a string with content
	 *
	 * Examples:
	 *   Is::notEmptyString('something');
	 *   => true
	 *
	 *   Is::notEmptyString('');
	 *   => false
	 *
	 *   Is::notEmptyString(array('something' => 'test'));
	 *   => false
	 *
	 *   Is::notEmptyString(array('something' => 'test'), 'something');
	 *   => true
	 *
	 * @param        $value
	 * @param string $key
	 * @return bool
	 */
	public static function notEmptyString($value, $key = '') {
		if (is_array($value)) {
			return isset($value[$key]) && is_string($value[$key]) && $value[$key] !== '';
		}
		return isset($value) && is_string($value) && $value !== '';
	}

	/**
	 * Return true only if $value is a string with no content
	 *
	 * Examples:
	 *   Is::emptyString('something');
	 *   => false
	 *
	 *   Is::emptyString('');
	 *   => true
	 *
	 *   Is::emptyString(array('something' => 'test'));
	 *   => false
	 *
	 * @param        $value
	 * @param string $key
	 * @return bool
	 */
	public static function emptyString($value, $key = '') {
		if (is_array($value)) {
			return isset($value[$key]) && is_string($value[$key]) && $value[$key] === '';
		}
		return isset($value) && is_string($value) && $value === '';
	}


	/**
	 * Return true only if $value is not an empty array
	 *
	 * Examples:
	 *   Is::notEmptyArray(array('a', 'b'));
	 *   => true
	 *
	 *   Is::notEmptyArray(array());
	 *   => false
	 *
	 *   Is::notEmptyArray('something');
	 *   => false
	 *
	 * @param $value
	 * @return bool
	 */
	public static function notEmptyArray($value) {
		return isset($value) && is_array($value) && count($value) > 0;
	}

	/**
	 * Return true only if $value is empty array
	 *
	 * Examples:
	 *   Is::emptyArray(array());
	 *   => true
	 *
	 *   Is::emptyArray(array('a' => 'a'));
	 *   => false
	 *
	 *   Is::emptyArray('something');
	 *   => false
	 *
	 * @param $value
	 * @return bool
	 */
	public static function emptyArray($value) {
		return isset($value) && is_array($value) && count($value) === 0;
	}

	/**
	 * @param $value
	 * @return bool
	 */
	public static function isBoolean($value) {
		return isset($value) && is_bool($value);
	}

	/**
	 * @param $value
	 * @return bool
	 */
	public static function isFalseBoolean($value) {
		return isset($value) && is_bool($value) && $value === false;
	}

	/**
	 * @param $value
	 * @return bool
	 */
	public static function isTrueBoolean($value) {
		return isset($value) && is_bool($value) && $value === false;
	}

	/**
	 * @param $value
	 * @return bool
	 */
	public static function pixelValue($value) {
		return isset($value) && is_string($value) && strpos($value, 'px') !== false;
	}

}