<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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
            <h1><a href="Home.jsp">Adoption</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="Home.jsp">In�cio</a></li>
                    <li><a href="Sobre.jsp">Sobre n�s</a></li>
                    <li><a href="Login.jsp" class="button special">Login</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <section id="main" class="wrapper">
            <div class="container">

                <header class="major">
                    <h2>Login</h2>
                </header>

                <!-- Text -->
                <section>
                    <form method="post" action="Login">
                        <div class="row uniform 50%">
                            <table>
                                <tr>
                                    <td><input type="text" id="email" placeholder="Email" /></td>
                                </tr>
                                <tr>
                                    <td><input type="password" id="senha" placeholder="Senha" /></td>
                                </tr>
                            </table>
                            <div class="row">
                                <input type="submit" value="Enviar" name="Enviar" />
                            </div>
                        </div>
                    </form>
            </div>
        </section>

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