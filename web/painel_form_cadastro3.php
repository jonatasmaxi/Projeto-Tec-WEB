<?php include 'connector_mysql.php'?>
<?php include 'header.php'?>
<?php
    echo $_POST['senha'];
    echo $_COOKIE['emailCadastro'];
    $email = $_COOKIE['emailCadastro'];
    $result = "UPDATE Usuario SET senha = '".$_POST['senha']."' WHERE email = '".$email."'";
    $resultado3 = mysql_query($result);   
 ?>
    <section>
        <div class="content-full">

            <form name="formcadastro2" id="formcadastro2" method="POST" enctype="multipart/form-data" action="painel_form_cadastro4.php">
                    <label for="imagem"> Escolha uma imagem para seu perfil: </label> <input type="file" id="imagem" accept="image/*"  name="imagem"><br><br>
                    <input type="hidden" name="MAX_SIZE_FILE" value="1024000">
                    <br> <br> <input type="submit" id="botao" value="Enviar">
                    <input type="button" value="Cancelar" onclick="javascript: location.href='index.php';" />
            </form>
        </div>
    </section>
<?php include 'footer.php'?>