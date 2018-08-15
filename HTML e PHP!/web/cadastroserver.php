
<?php

	$con = mysqli_connect('127.0.0.1','root', 'root');
	
	if(!$con)
	{
		echo 'erro';
	}
	
	if(!mysqli_select_db($con, 'adoption'))
	{
		echo 'Banco de dados não foi encontrado';
	}
	
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	
	
	
	$sql = "INSERT INTO usuario(nome, cpf, telefone, endereco, email, senha) VALUES ('$nome', '$cpf', '$telefone', '$endereco', '$email', '$senha')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'cadastro não realizado';
	}
	else 
	{
		echo 'Cadastro realizado'; 

		header("Location: Login.php");
	}
	
?>