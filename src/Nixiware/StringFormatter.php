<?php
namespace Nixiware;

class StringFormatter
{
	/**
	 * Convert a string to a formatted representation. 
	 * 
	 * @param string $str - string template
	 * @param array $data - values
	 * @return string formatted string
	 */
	public static function format($str, $data)
	{
		return preg_replace_callback('#{{(\w+?)}}#', function($m) use ($data) {
			return $data[$m[1]];
		}, $str);
	}
}