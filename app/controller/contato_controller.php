<?php
$error = false;
##enviando email
if(!empty($_POST['nome']))
{
	
	$userName=$_REQUEST['nome'];
	$userEmail=$_REQUEST['email'];	
	$userMsg=$_REQUEST['mensagem'];
	$to=$_POST['email_to'];

	$subject = "Message from ".$userName; 
	$message = '<html><head><title>'.$subject.'</title></head><body><table><tr><td>Email:  </td><td> '.$userEmail.'</td></tr>
	<tr><td>Nome : </td><td> '.$userName.'</td></tr><tr><td>Mensagem : </td><td> '.$userMsg.'</td>
	</tr></table></body></html>';	
	
	$headers = "From: " . strip_tags($userEmail) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($userEmail) . "\r\n";
	//$headers .= "CC: susan@example.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	if(!mail($to, $subject, $message, $headers)){
	 $error = true;
     $mensagem='Ocorreu um erro no envio da mensagem. Tente novamente';		
  }else{
  	 $mensagem='Mensagem enviada com sucesso :) ';		
 }
}

$endereco = '';
##realizar busca por dados de cliente aqui
$cliente = GoCURL(array('id_cliente'=>$_SESSION['id_cliente']), 'cliente/buscar');            
if(!$cliente['success'])
{
	echo "cliente não encontrado, tente novamente";
	exit;
}
$endereco = $cliente['dados']['Cliente']['endereco'].', '.$cliente['dados']['Cliente']['numero'].', '.$cliente['dados']['Cliente']['bairro'].', '.$cliente['dados']['Cliente']['cidade'];


?>