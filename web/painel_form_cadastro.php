

<?php include 'header.php'?>
<?php include 'aside.php'?>
<link rel="stylesheet" type="text/css" href="style.css">
    <body>
        <section>
            <div>
                <form name="cadastro" id="formcadastro" method="POST" action="painel_form_cadastro2.php">
                    <label for="nome"> Nome Completo*: </label> <input type="text" id="nome" value="" required placeholder="Digite seu nome" name="nome"><br><br>
                    <label for="email"> Email*: </label> <input type="email" value="" placeholder="nome@email.com" required id="email" name="email">
                    <br> <br> <input type="submit" id="botao" value="Enviar"> 
                    <input type="button" value="Cancelar">
                </form>
            </div>
      </section>
   </body>
<?php include 'footer.php'?>
</html>
