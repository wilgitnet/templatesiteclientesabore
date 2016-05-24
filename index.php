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
$banner = false;

if ($page_name=='') {
	$banner = true;
	include $browser_t.'/index.php';
	}
elseif ($page_name=='home') {
	$banner = true;
	include $browser_t.'/index.php';
	}
elseif ($page_name=='quem-somos') {	
	include $browser_t.'/about.php';
	}
elseif ($page_name=='contato') {	
	include $browser_t.'/contato.php';
	}
elseif ($page_name=='login') {	
	include $browser_t.'/login.php';
	}
elseif ($page_name=='compra') {	
	include $browser_t.'/compra.php';
	}
elseif ($page_name=='registro') {	
	include $browser_t.'/registro.php';
	}
elseif ($page_name=='categoria') {	
	include $browser_t.'/cardapio.php';
	}	
elseif ($page_name=='historico') {	
	include $browser_t.'/acompanhamento.php';
	}	
elseif ($page_name=='meus-dados') {	
	include $browser_t.'/meusdados.php';
	}	
elseif ($page_name=='acompanhamento') {	
	include $browser_t.'/acompanhamentopedido.php';
	}	
elseif ($page_name=='carrinho') {	
	include $browser_t.'/carrinho.php';
	}

elseif ($page_name=='trocar-senha') {	
	include $browser_t.'/senha.php';
	}
elseif ($page_name=='carrinho-ajax') {
	include $browser_t.'/carrinho_ajax.php';
	}
else
	{
		include $browser_t.'/404.php';
	}

?>
