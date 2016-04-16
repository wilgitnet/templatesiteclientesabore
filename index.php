<?php 
/*
 * A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 *
 */
include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include $browser_t.'/index.php';
	}
elseif ($page_name=='index.html') {
	include $browser_t.'/index.php';
	}
elseif ($page_name=='about.php') {
	include $browser_t.'/about.php';
	}
elseif ($page_name=='single.html') {
	include $browser_t.'/single.php';
	}
elseif ($page_name=='gallery.php') {
	include $browser_t.'/gallery.php';
	}
elseif ($page_name=='contato.php') {
	include $browser_t.'/contato.php';
	}
elseif ($page_name=='contact-post.php') {
	include 'app/contact.php';
	}
else
	{
		include $browser_t.'/404.php';
	}

?>
