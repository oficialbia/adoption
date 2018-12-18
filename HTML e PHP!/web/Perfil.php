<?php
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	require_once("functions.php");
	seguranca();

	$username = $_SESSION['user']['username'];
	$nome = $_SESSION['user']['nome'];
	$email = $_SESSION['user']['email'];
	$sobrenome = $_SESSION['user']['sobrenome'];
		

?>


<!DOCTYPE html>
<html lang="br">
    <head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <title>Adoption - Perfil</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <script src="js/jquery.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
        </noscript>
    </head>
    <body class="landing">

        <!-- Header -->
        <header id="header">
            <h1><a href="Home.html">Adoption</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="Home.html" class="button special"> Sair </a></li>
                </ul>
            </nav>
        </header>

        <!-- One -->
        <section id="one" class="wrapper style1 special">
            <div class="row 150%">
                <div class="4u 12u(medium)">
                <h1> Bem-Vindo <?php echo $username?></h1>
                 <h1><?php echo $email?></h1>
                    <section class="box">
                        <a href="Adote.html">
                            <i class="icon big rounded color1 fa-cloud"></i>

                            <h3>Adote</h3> 
                            <p>Os bichinhos não são objetos nem produtos. São seres vivos, que merecem amor e carinho e isso não se mede financeiramente. </p> </a>
                    </section>
                </div>
                <div class="4u 12u(medium)">
                    <section class="box">
                        <a href="CadastroAnimal.php">
                            <i class="icon big rounded color9 fa-desktop"></i>
                            <h3>Doe</h3>
                            <p>Muitas vezes, assumir que não tem condições de oferecer o que o animal merece é um verdadeiro ato de amor.</p> </a>
                    </section>
                </div>
                <div class="4u 12u(medium)">
                <h1><?php echo $nome?></h1>
                    <section class="box">
                        <a href="Importancia.html">
                            <i class="icon big rounded color6 fa-rocket"></i>
                            <h3>Importância dos animais de estimação</h3>
                            <p>O famoso "até que a morte nos separe" pode até ser falho nas relações humanas, mas pode apostar que com os animais de estimação a situação muda. Eles serão leais a você sempre.</p> </a>
                    </section>
                </div>
            </div>
        </section>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="row">
            <div class="8u 12u(medium)">
                <ul class="copyright">
                    <li>&copy; 2018. All rights reserved.</li>
                </ul>
            </div>
            <div class="4u 12u(medium)">
                <ul class="icons">
                    <li>
                        <a href="http://www.facebook.com" class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
                    </li>
                    <li>
                        <a href="http://www.twitter.com" class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
                    </li>
                    <li>
                        <a href="http://www.gmail.com" class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>
