<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
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
    <body>

        <!-- Header -->
        <header id="header">
            <h1><a href="Home.html">Adoption</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="Home.html">Início</a></li>
                    <li><a href="Sobre.html">Sobre nós</a></li>
                    <li><a href="Login.html" class="button special">Login</a></li>
                </ul>
            </nav>
        </header>
        <form method="post" action="cadastroserver.php">
            <!-- Main -->
            <section id="main" class="wrapper">
                <div class="container">

                    <header class="major">
                        <h2>Cadastre-se</h2>
                    </header>
                    <section>
                        <div class="row uniform 50%">
                             <table>
                                <tr>
                                    <td>
                                        <!--<input type="text" id="nome" placeholder="Nome" />-->
                                        <h5>Tipo de animal:</h5>
                                        <input type="text" name="tipo" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td><h5>Raça:</h5>

                                        <input type="text" name="raca" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td><h5>Idade:</h5>

                                        <input type="text" name="idade" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td><h5>Porte:</h5>

                                        <input type="text" name="porte" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td><h5>Cidade:</h5>

                                        <input type="text" name="cidade" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td><h5>Gênero:</h5>

                                        <input type="text" name="genero" value="" />
                                    </td>
                                </tr>
                            </table>
                            <br />
                            <div class="row">
                                <input type="submit" value="Cadastrar" name="Cadastrar" /> 
                            </div> 
                        </div>
                    </section>
                </div>
            </section>
        </form>

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
