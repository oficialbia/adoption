<?php
	$con = mysqli_connect('localhost','root', 'root');
	
	if(!$con)
	{
		echo 'erro';
	}
	
	if(!mysqli_select_db($con, 'adoption'))
	{
		echo 'Banco de dados não foi encontrado';
	}
	
	$nome = $_POST['nome'];
	$tipoanimal = $_POST['tipoanimal'];
	$raca = $_POST['raca'];
	$idade = $_POST['idade'];
	$cor = $_POST['cor'];
	$emaildono = $_POST['emaildono'];
	$descricao = $_POST['descricao'];
	
	
	
	
	$sql = "INSERT INTO doar (nome, tipoanimal, raca, idade, cor, emaildono, descricao) VALUES ('$nome', '$tipoanimal', '$raca', '$idade', '$cor', '$emaildono', '$descricao')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Animal não cadastrado';
	}
	else 
	{
		echo 'Animal cadastrado'; 
	}
	
?>