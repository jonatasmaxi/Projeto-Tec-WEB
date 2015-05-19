<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Coink </title>
        <link rel="stylesheet" type="text/css" href="style.css">   
        <link rel="stylesheet" href="styleMobile.css" media="screen and (max-width:480px)" />
    </head>
    <body>
        <div id="site">
        <header>           
            <div id="topMenu">
                <nav>
                    <ul>
                        <li>Ajuda</li>
                        <li>Telefone</li>
                        <a href="https://www.facebook.com/"><li>Facebook</li></a>
                        <a href="https://twitter.com/"><li>Twitter</li></a>
                        <a href="https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/?gpsrc%3Dgplp0"><li>Google+</li>
                    </ul>
                </nav>
            </div>
            <div id="head">
                <div class="logo">
                    <a href="http://coink.ckode.com.br/"><img alt="index" src="images/PigVuador.png"/></a>
                </div>
                <div class="searchBar">
                    <form class="search" method="GET" action="search.php">
                        <fieldset>
                            <div class="barra">
                                <input type="text" placeholder="Entre com a pesquisa" id="search" name="search">
                            </div>
                            <div class="botao">
                                <input type="submit" src="images/search.png" value="Buscar"/>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="carrinho">
                    <img src="images/favourites7.png" href="#" title="Carrinho"/>
                    <p>Favoritos<br>0 itens
                    </p>
                </div>
                <div class="login">
                	<img src='images/user151.png' href='#' title='User'/>
                <?php
	            	if( isset($_COOKIE['email']) )
	            	{
	                	echo "<p>Olá " . $_COOKIE['nome'] . "</p>";
	            	} else echo "
                    		<p>Faça <a href='loginCoink.php'>login</a><br>ou <a href='painel_form_cadastro.php'>cadastre-se</a>
                    		</p>
	            	";
	        	?> 
                </div>
            </div>
        </header>