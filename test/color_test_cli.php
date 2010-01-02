#! /usr/bin/env php
<?php
	require_once(dirname(__FILE__) . '/../command_line_color.php');
	$s = CommandLineColor::bold_red_on_white('This is my red string');
	echo $s;
	echo "\n";
	echo CommandLineColor::underline_white_on_red('WHOA!');