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
	
	$NomeEmpresa = $_POST['NomeEmpresa'];
	$cnpj = $_POST['cnpj'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$sevico = $_POST['sevico'];
	$dono = $_POST['dono'];
	
	
	
	
	$sql = "INSERT INTO empresas (NomeEmpresa, cnpj, endereco, cidade, sevico, dono) VALUES ('$NomeEmpresa', '$cnpj', '$endereco', '$cidade', '$sevico', '$dono')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Cadastro não realizado';
	}
	else 
	{
		echo 'Cadastro realizado'; 
	}
	
?>