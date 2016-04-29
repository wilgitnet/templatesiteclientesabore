<?PHP 	
	$error = false;
	$success = false;
	$input = true;

	if(empty($_GET['token']))
	{
		header('location:index.php');		
	}

	$token = $_GET['token'];

	##verificando token
	if(substr($token, 0, 1) != 'S')
	{
		$mensagem = 'Token é inválido ou já foi utilizado';
		$error = true;
		$input = false;
	}
	
	if(!empty($_POST['submit_senha']))
	{
		if(empty($_POST['senha']) || empty($_POST['confirmar_senha']))
		{
			$mensagem = 'Informar senha e confirmação de senha';
			$error = true;
		}

		else if($_POST['senha'] != $_POST['confirmar_senha'])
		{
			$mensagem = 'Senha de confirmação incorreta';
			$error = true;
		}
		else
		{
			$token = GoCURL(array('token'=>$token, 'senha'=>md5($_POST['senha'])), 'usuario/troca_senha');	

			if(!$token['success'])
			{
				$mensagem = $token['message'];
				$error = true;
				$input = false;
			}
			else
			{
				$success = true;
				$input = false;
				$mensagem = 'Senha Alterada com sucesso';	
			}
			
		}		
	}


?>