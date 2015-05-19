<?php include 'connector_mysql.php'?>
<?php include 'header.php'?>
<?php
    echo $_POST['nome'];
    echo $_POST['email'];
    $emailCadastro = $_POST['email'];
    setcookie('emailCadastro', $emailCadastro, time()+(24*60*60) );
    $sql0 = "SELECT * FROM Usuario WHERE email = '".$_POST['email']."'";
    $result = mysql_query($sql0);
    if(mysql_num_rows($result)>0){
	   echo("<script language=\"javascript\">history.go(-1);</script>");
	   echo("<script language = 'javascript'> alert('Email ja cadastrado!'); </script>");
    }
    else{
	    $sql = "INSERT INTO Usuario (nome,email) VALUES ('". $_POST['nome']."','".$_POST['email']."')";
	    $resultado = mysql_query($sql);
    }
    
 ?>
    <section>
        <div class="content-full">
            <form name="formcadastro2" id="formcadastro2" method="POST" action="painel_form_cadastro3.php">
                <label for="senha"> Senha*: </label> <input type="password" id="senha" required placeholder="Escolha uma senha" name="senha"><br><br>
                <label for="confirmasenha"> Confirme a Senha*: </label> <input type="password" required placeholder="Repita a senha" id="confirmasenha" name="confirmasenha">
                <br> <br> <input type="submit" id="botao" value="Enviar"> 
                <input type="button" value="Cancelar">
                	
            </form>
        </div>
    </section>
<?php include 'footer.php'?>
</html>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery­1.11.1.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional­methods.min.js"></script>
<script>

    jQuery(function(){

        $("#botao").click(function(){

        $(".error").hide();

        var hasError = false;

        var passwordVal = $("#senha").val();

        var checkVal = $("#confirmasenha").val();

        if (passwordVal == '') {

            $("#senha").after('<span class="error">Digite uma senha.</span>');

            hasError = true;

        } else if (checkVal == '') {

            $("#confirmasenha").after('<span class="error">Repita a sua senha.</span>');

            hasError = true;

        } else if (passwordVal != checkVal ) {

            $("#confirmasenha").after('<span class="error">Senhas não conferem .</span>');

            hasError = true;

        }

        if(hasError == true) {return false;}

    });

});
</script>