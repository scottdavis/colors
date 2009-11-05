<?php
	require_once('PHPUnit/Framework.php');
	require_once(dirname(__FILE__) . '/../color.php');
	class ColorTest extends PHPUnit_Framework_TestCase {
		public function testRedOnWhite() {
			$s = Color::red_on_white('This is my red string');
			//$this->assertEquals('\e[31m\e[47m\e[1mThis is my red string\e[0m', $s);
			`echo "$s"`;
		}
	}
?>