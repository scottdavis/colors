#! /usr/bin/env php
<?php
	require_once(dirname(__FILE__) . '/../color.php');
	$s = Color::bold_red_on_white('This is my red string');
	echo $s;
	echo "\n";
	echo Color::underline_white_on_red('WHOA!');