<?php
	require_once('PHPUnit/Framework.php');
	require_once(dirname(__FILE__) . '/../command_line_color.php');
	class ColorTest extends PHPUnit_Framework_TestCase {
		public function testRedOnWhite() {
			$s = CommandLineColor::red_on_white('This is my red string');
			`echo "$s"`;
		}
	}
?>