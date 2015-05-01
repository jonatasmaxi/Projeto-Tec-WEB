<?php include 'connector_mysql.php'?>
<?php include 'header.php'?>
<?php
    echo $_POST['nome'];
    echo $_POST['email'];
    echo $_POST['senha'];
    echo $_POST['user'];
 ?>
    <section>
        <div class="content-full">

            <form name="formcadastro2" id="formcadastro2" method="POST" action="painel_form_cadastro4.php">
                    <label for="imagem"> Escolha uma imagem para seu perfil: </label> <input type="file" id="imagem" accept="image/*"  name="imagem"><br><br>
                    <br> <br> <input type="submit" id="botao" value="Enviar">
                    <input type="button" value="Cancelar">
            </form>
        </div>
    </section>
<?php include 'footer.php'?>