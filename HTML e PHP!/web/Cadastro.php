<?php
	require_once("config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(checkValues($_POST['nome'], $_POST['senha'], $_POST['email'], $_POST['sobrenome']))
		{
			$senha = $_POST['senha'];
			$email = $_POST['email'];
			$nome = $_POST['nome'];
			$sobrenome = $_POST['sobrenome'];
			cadastrar($senha, $email, $nome, $sobrenome);
		}
		else {
			$message = '<h1>Por favor, preencha os campos corretamente.</h1>
						<h3><a href="../index.html">Tentar Novamente</a></h3>';
			echo $message;
		}
	}
	else {
		header("Location: ../index.html");
	}

	function checkValues($nome, $senha) {
		return true;
	}

	function cadastrar($senha, $email, $nome, $sobrenome) {
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "INSERT INTO users (nome, email, senha, sobrenome) VALUES ('".$nome."', '".$email."', '".$senha."', '".$sobrenome."')";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		if($result !== null){
			echo "Oi";
			session_start();
			$_SESSION['user']['nome'] = $nome;
			$_SESSION['user']['email'] = $email;
			header("Location: inicial.php");
		}	else {
			$message = '<h1>Erro ao cadastrar o usuário.</h1>
						<h3>Por favor, <a href="../index.html">Tente Novamente</a></h3>';
			echo $message;
		}
	}
?>
