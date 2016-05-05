<?php
error_reporting(E_ALL);

/*
 * A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 *
 */
$current_page_uri = $_SERVER['REQUEST_URI'];
$part_url = explode("/", $current_page_uri);

$page_name = $part_url[1];
if(empty($part_url[2]))
{
	$part_url[2] = 'not';
}
if(empty($part_url[3]))
{
	$part_url[3] = 'not';
}

$dominio = str_replace('www.', '', $_SERVER['HTTP_HOST']);
$host 	 = 'http://'.$_SERVER['HTTP_HOST'];

?>