<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<head>
		<title></title>
	</head>
	<body>
		<?php  
			$server = "localhost";
			$usuario = "root";
			$senha = "root";
			$banco = "adoption";
			// Create connection
			$conn = new mysqli($server, $usuario, $senha, $banco);
			// Check connection
			if ($conn->connect_error) {
			    die("Erro no banco de dados: " . $conn->connect_error);
			}
		?>
		<?php
			$sql = "SELECT nome, tipoanimal, raca, idade, cor, emaildono FROM doar";
			$result = $conn->query($sql);
			echo "<table>";
			    echo "<tr>";
		    		echo "<th>" . "Nome" . "</th>";
		    		echo "<th>" . "Tipo do animal" . "</th>";
		    		echo "<th>" . "Raça" . "</th>";
		    		echo "<th>" . "Idade" . "</th>";
		    		echo "<th>" . "Cor" . "</th>";
		    		echo "<th>" . "Email do dono" . "</th>";
		  		echo "</tr>";
		  	echo "</table>";
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    echo "<table>";
			    	echo "<tr>";
				        echo "<th>" . $row["nome"] . "</th>";
				        echo "<th>" . $row["tipoanimal"] . "</th>";
				        echo "<th>" . $row["raca"] . "</th>";
				        echo "<th>" . $row["idade"] . "</th>";
				        echo "<th>" . $row["cor"] . "</th>";
				        echo "<th>" . $row["emaildono"] . "</th>";
				    echo "</tr>";
		  		echo "</table>";
			    }

			} else {
			    echo "Nenhum animal para adoção encontrado";
			}
			$conn->close();
		?>

		<style type="text/css">
			table, th, td {
			  border: 1px solid black;
			}

			table, th, td {
			  border: 1px solid black;
			  border-collapse: collapse;
			}

			th, td {
			  padding: 15px;
			}

			th{
				width: 170px;
				text-align: left;
			}

			table {
			  border-spacing: 5px;
			}
		</style>
	</body>
</html>