<!DOCTYPE html>
<html>
    <head>
       <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <title>Adoption - Doe</title>
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
    <body>

        <!-- Header -->
        <header id="header">
            <h1><a href="Home.html">Adoption</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="Home.html">Início</a></li>
                    <li><a href="Sobre.html">Sobre nós</a></li>
                    <li><a href="Login.php" class="button special">Login</a></li>
                     <li><a href="Loja.html" class="button special">Loja</a></li>
                    <li><a href="Empresas.html" class="button special">Empresas</a></li>
                    <li><a href="Perfil.html" class="button special">Perfil</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <section id="main" class="wrapper">
            <div class="container">

                <header class="major">
                    <h2>Doe</h2>
                    <p>Doe animais: faça com que eles tenham um lar e muito amor!</p>
                </header>   
            </div>
        </section>

         
        <form method="post" action="Doando.php">
         	<div class="doe">
                <table>
                    <tr>
	                    <td>
		                    <h5>Nome:</h5>
		                    <input type="text" name="nome" value="" />
	                    </td>
	                </tr>

                    <tr>
	                    <td>
		                    <h5>Tipo do animal:</h5>
							<input type="text" name="tipoanimal" value="" />
	                    </td>
                    </tr>

                    <tr>
	                    <td>
		                    <h5>Raça:</h5>
							<input type="text" name="raca" value=""/>
	                    </td>
                    </tr>

                    <tr>
	                    <td>
	                    	<h5>Idade:</h5>
	                    	<input type="text" name="idade" value="" />
	                    </td>
                    </tr>

                    <tr>
	                    <td>
		                    <h5>Cor:</h5>
							<input type="text" name="cor" value="" />
	                    </td>
                    </tr>

                    <tr>
	                    <td>
		                    <h5>Email do dono:</h5>
							<input type="text" name="emaildono" value="" />
	                    </td>
                    </tr>

					<tr>
						<td>
							<h5>Descrição do animal:</h5>
							<textarea name="descricao" cols="40"></textarea>
						</td>
					</tr>
                </table>
                
                <br />
                <div class="row">
                    <input type="submit" value="Cadastrar" name="Cadastrar" /> 
                    <input type="reset" value="Limpar" name="Limpar" /> 
                </div>
            </div> 
        </form>
        <!-- Footer -->
        <footer id="footer">


        </section>
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
    </div>
</footer>
</body>
</html>
