<?PHP 	
	$error = false;
	$success = false;
	if(!empty($_POST['submit_email']))
	{
		if(empty($_POST['email_troca']))
		{			
			$error = true;
			$mensagem = 'Informar email para troca de senha';
		}
		else
		{
			$email = GoCURL(array('email'=>$_POST['email_troca']), 'usuario/novasenha_token');
			if(!$email['success'])
			{
				$error = true;
				$mensagem = $email['message'];
			}
			else
			{						
				$link = $host.'/esqueci-minha-senha/token/'.$email['dados']['Usuario']['token_senha'];
				$subject = "Message from ".$email['dados']['Usuario']['nome']; 
				$message = '<html><head><title>'.$subject.'</title></head><body><table><tr><td>Email para troca de senha:  </td><td> '.$email['dados']['Usuario']['email'].'</td></tr>
				<tr><td>Clique Aqui para trocar : </td><td> '.$link.'</td></tr><tr><td>Obs: </td><td>Se você não solicitou a troca de senha, pode somente ignorar esse email</td>
				</tr></table></body></html>';	
				
				$headers = "From: " . strip_tags($email['dados']['Usuario']['email']) . "\r\n";
				$headers .= "Reply-To: ". strip_tags($email['dados']['Usuario']['email']) . "\r\n";
				
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				if(!mail($email['dados']['Usuario']['email'], $subject, $message, $headers))
				 {
					 $error = true;
				     $mensagem='Ocorreu um erro no envio da mensagem. Tente novamente';		
				 }
				 else
				 {
				 	 $success = true;
				  	 $mensagem='Um email foi enviado com as informações para troca de senha';		
				 }										
			}
		}	
	}

	if(!empty($_POST['submit']))
	{
		//enviando requisicao para api	
		$login = GoCURL(array('usuario'=>$_POST['usuario'], 'senha'=>md5($_POST['senha'])), 'usuario/login');
		
		if(!$login['success'])
		{
			$mensagem = 'Dados incorretos, Tente novamente';
			$error = true;
		}	
		else
		{
			$_SESSION['Usuario'] = $login['dados']['Usuario'];	
			$_SESSION['Usuario']['logado']	= true;
			header('Location:'.$host.'/home');
		}

		
	}

	
	if($part_url[2] == 'sair')
	{
		unset($_SESSION['Usuario']);
		header('Location:'.$host.'/login');
	}
		
	

?>