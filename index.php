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
$banner = true;

if ($page_name=='') {
	$banner = true;
	include $browser_t.'/index.php';
	}
elseif ($page_name=='index.php') {
	$banner = true;
	include $browser_t.'/index.php';
	}
elseif ($page_name=='about.php') {
	$banner = true;
	include $browser_t.'/about.php';
	}
elseif ($page_name=='single.html') {
	$banner = true;
	include $browser_t.'/single.php';
	}
elseif ($page_name=='gallery.php') {
	include $browser_t.'/gallery.php';
	}
elseif ($page_name=='contato.php') {
	$banner = true;
	include $browser_t.'/contato.php';
	}
elseif ($page_name=='login.php') {
	$banner = false;
	include $browser_t.'/login.php';
	}
elseif ($page_name=='compra.php') {
	$banner = false;
	include $browser_t.'/compra.php';
	}
elseif ($page_name=='registro.php') {
	$banner = false;
	include $browser_t.'/registro.php';
	}
elseif ($page_name=='cardapio.php') {
	$banner = false;
	include $browser_t.'/cardapio.php';
	}	
elseif ($page_name=='carrinho.php') {
	$banner = false;
	include $browser_t.'/carrinho.php';
	}
elseif ($page_name=='contact-post.php') {
	$banner = true;
	include 'app/contact.php';
	}
else
	{
		include $browser_t.'/404.php';
	}

?>
