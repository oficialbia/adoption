<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("functions.php");
   seguranca();
   $nomempresa = $_SESSION['empresa']['nomempresa'];
   $cnpj = $_SESSION['empresa']['cnpj'];
   $endereco = $_SESSION['empresa']['endereco'];
   $cidade = $_SESSION['empresa']['cidade'];
   $tiposerviço = $_SESSION['empresa']['tiposerviço'];
   $dono = $_SESSION['empresa']['dono'];
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<head>
		<title> Perfil da Empresa </title>
	</head>
	<body>
		<h3>Nome da empresa: </h3> 		<p><?php echo $nomempresa ?></p>

		<h3>cnpj:</h3> 					<p><?php echo $cnpj ?></p>

		<h3>Endereço:</h3> 				<p><?php echo $endereco ?></p>

		<h3>Cidade:</h3> 				<p><?php echo $cidade ?></p>

		<h3>Tipo de serviço:</h3> 		<p><?php echo $tiposerviço ?></p>

		<h3>Dono:</h3> 					<p><?php echo $dono ?></p>
	</body>
</html>