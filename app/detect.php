<?php
session_start();

require_once('function.php');

##alterar para pegar dominio dinamico
$buscarDominio = false;

$userBrowser = $_SERVER['HTTP_ACCEPT']; 
if(stristr($userBrowser, 'application/vnd.wap.xhtml+xml')) 
{
$_REQUEST['wap2'] = 1;
}

elseif(stripos($_SERVER['HTTP_USER_AGENT'],"iPod"))
{
$_REQUEST['iphone'] = 1;

}
elseif(stripos($_SERVER['HTTP_USER_AGENT'],"iPhone"))
{
$_REQUEST['iphone'] = 1;

}
elseif(stripos($_SERVER['HTTP_USER_AGENT'],"Android"))
{
$_REQUEST['Android'] = 1;

}
elseif(stripos($_SERVER['HTTP_USER_AGENT'],"IEMobile"))
{
$_REQUEST['IEMobile'] = 1;

}
elseif(stristr($userBrowser, 'DoCoMo/' || 'portalmmm/'))
{
$_REQUEST['imode'] = 1;
}

elseif(stristr($userBrowser, 'text/vnd.wap.wml')) 
{
$_REQUEST['wap'] = 1;
}
elseif(stristr($userBrowser, 'text/html')) 
{
$_REQUEST['html'] = 1;
}


if(!defined('WAP'))
	define('WAP', isset($_REQUEST['wap']) || isset($_REQUEST['wap2']) || isset($_REQUEST['imode'])|| isset($_REQUEST['html'])|| isset($_REQUEST['Android'])|| isset($_REQUEST['iphone'])|| isset($_REQUEST['IEMobile']));
	
	if (WAP)
{
	define('WIRELESS_PROTOCOL', isset($_REQUEST['wap']) ? 'wap' : (isset($_REQUEST['wap2']) ? 'wap2' : (isset($_REQUEST['iphone']) ? 'iphone' : (isset($_REQUEST['imode']) ? 'imode' : (isset($_REQUEST['IEMobile']) ? 'IEMobile' :(isset($_REQUEST['html']) ? 'html' : (isset($_REQUEST['Android']) ? 'Android' : '')))))));  

if (WIRELESS_PROTOCOL == 'wap')
	  {
$browser_t = "mobile";
	  }
elseif (WIRELESS_PROTOCOL == 'wap2')
	  {


$browser_t = "mobile";


	  }
elseif (WIRELESS_PROTOCOL == 'imode')
	  {
	
$browser_t = "mobile";

	  }
	  elseif (WIRELESS_PROTOCOL == 'iphone')
	  {
	

$browser_t = "smartphone";

	  }
	  elseif (WIRELESS_PROTOCOL == 'Android')
	  {
	

$browser_t = "smartphone";

	  }
	   elseif (WIRELESS_PROTOCOL == 'IEMobile')
	  {
	
$browser_t = "smartphone";

	  }
	  elseif (WIRELESS_PROTOCOL == 'html')
	  {

	 $mobile_browser = '0';

if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone)/i',
    strtolower($_SERVER['HTTP_USER_AGENT']))){
    $mobile_browser++;
    }

if((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml')>0) or 
    ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))){
    $mobile_browser++;
    }

$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda','xda-');

if(in_array($mobile_ua,$mobile_agents)){
    $mobile_browser++;
    }

		if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'iemobile')>0) {
$mobile_browser++;
}
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows')>0) {
    $mobile_browser=0;
    }


if($mobile_browser>0){
   // do something wap

$browser_t = "mobile";

}
// non-mobile
else
{

$_SESSION['Browser_d'] = "web";
$browser_t = "web";

}
   } else {
   // do something else html
  
$_SESSION['Browser_d'] = "web";
$browser_t = "web";
   }

	  }
	 
	
	else
	{
$mobile_browser = '0';

if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone)/i',
    strtolower($_SERVER['HTTP_USER_AGENT']))){
    $mobile_browser++;
    }

if((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml')>0) or 
    ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))){
    $mobile_browser++;
    }

$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda','xda-');

if(in_array($mobile_ua,$mobile_agents)){
    $mobile_browser++;
    }
	if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'iemobile')>0) {
$mobile_browser++;
}

if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows')>0) {
    $mobile_browser=0;
    }


if($mobile_browser>0){
   // do something wap
 
$browser_t = "mobile";

}
// non-mobile
else
{
$_SESSION['Browser_d'] = "web";
$browser_t = "web";
}   
}

if(!empty($_SESSION['dominio']))
{
    if($_SESSION['dominio'] != $dominio)
    {        
        $buscarDominio = true;
    }
}

##buscando dados de cliente atraves do dominio
if(empty($_SESSION['id_cliente']))
{        
    $buscarDominio = true;
}

##busca informacoes quando troca o dominio ou quando esta na pagina index.php
if($buscarDominio || ($page_name == '' || $page_name == 'home'))
{
    ##realizar busca por dados de cliente aqui
    $dadosDominio = GoCURL(array('dominio'=>$dominio), 'cliente/dominio');            

    if($dadosDominio['success'] && !empty($dadosDominio['dados']['Cliente']['id']))
    {        
        $_SESSION['nome_fantasia']      = $dadosDominio['dados']['Cliente']['nome_fantasia'];
        $_SESSION['id_cliente']         = $dadosDominio['dados']['Cliente']['id'];
        $_SESSION['logo']               = $dadosDominio['dados']['Cliente']['logo'];                
        $_SESSION['banner1']            = false;
        $_SESSION['banner2']            = false;
        $_SESSION['banner3']            = false;
        $_SESSION['smart_banner1']      = false;
        $_SESSION['dominio']            = $dominio;                
        $_SESSION['menu_principal']     = false;
        $_SESSION['style']              = $dadosDominio['dados']['Cliente']['cor'];
        $_SESSION['funcionamento']      = explode('---', $dadosDominio['dados']['Cliente']['funcionamento']);        
        $_SESSION['quem_somos']         = $dadosDominio['dados']['Cliente']['quem_somos'];

        if(!empty($dadosDominio['dados']['Cliente']['menu_principal']))
        {
            $_SESSION['menu_principal'] = $dadosDominio['dados']['Cliente']['menu_principal'];        
            $_SESSION['categoria_id']   = $dadosDominio['dados']['Cliente']['categoria_id'];        
        }

        ##banner
        if(!empty($dadosDominio['dados']['Cliente']['banner1'])){
            $_SESSION['banner1']    = $dadosDominio['dados']['Cliente']['banner1'];        
            $_SESSION['link1']      = $dadosDominio['dados']['Cliente']['link_banner1'];        
        }
            
        if(!empty($dadosDominio['dados']['Cliente']['banner2'])){
            $_SESSION['link2']      = $dadosDominio['dados']['Cliente']['link_banner2'];        
            $_SESSION['banner2']    = $dadosDominio['dados']['Cliente']['banner2'];        
        }
            
        if(!empty($dadosDominio['dados']['Cliente']['banner3']))
        {
            $_SESSION['link3']    = $dadosDominio['dados']['Cliente']['link_banner3'];           
            $_SESSION['banner3']    = $dadosDominio['dados']['Cliente']['banner3'];        
        }

        if(!empty($dadosDominio['dados']['Cliente']['smart_banner1']))
        {
            $_SESSION['smart_banner1']    = $dadosDominio['dados']['Cliente']['smart_banner1'];                       
        }
            
    }
}


//testar funcionalidades em outras plataformas
//$browser_t = 'mobile';

	?>