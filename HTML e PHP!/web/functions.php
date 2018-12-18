<?php
	session_start();

	function seguranca() {
		if($_SESSION['empresa']['nomempresa'] == null) {
			header("Location: ../Login.php");
		}
	}
?>
