<?php
	require_once("config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

		if(checkValues($_POST['user'], $_POST['senha'])
	{
			$username = $_POST['user'];
			$senha = $_POST['senha'];
			login($nome, $senha); /
			
		} else {
			$message = '<h1>Por favor, preencha os campos corretamente.</h1>
						<h3><a href="../index.html">Tentar Novamente</a></h3>'; 
						
			echo "Erro";
		}
	} else {
		header("Location: ../index.html");
	}

	function checkValues($nome, $senha) { 
		if( isset($nome) && !empty($nome) && isset($senha) && !empty($senha) ){
			$R = true; boolean
		}
		else {
			$R = false; 
		}
		return $R; 
	}

	function login($username, $senha) { 
		$config = new Config(); 
		$conexao = $config->conectaBanco(); 
		$query = "SELECT * FROM users WHERE nome  = '".$nome."' AND senha = ".$senha; 
		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error); 
		if(mysqli_num_rows($result) == 1){
			$user = $result->fetch_array(MYSQLI_ASSOC);
			session_start(); 

			$_SESSION['user']['nome'] = $user['nome'];
			$_SESSION['user']['email'] = $user['email'];
			header("Location: inicial.php");
			

		} else {
			$message = '<h1>Senha ou username incorretos!.</h1>
						<h3>Por favor, <a href="../index.html">Tente Novamente</a></h3>';
						echo "Erro";
						

		}
	}
?>
