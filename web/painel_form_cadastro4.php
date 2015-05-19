<?php include 'connector_mysql.php'?>
<?php include 'header.php'?>
    <section>
    <?php
    	$img = $_FILES["imagem"];
    	$email = $_COOKIE['emailCadastro'];
	
        preg_match("/^.+(?=\@){1}/i", $email, $user);
	
	echo $user[0];
	
	preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $img["name"], $ext);

	// Gera um nome único para a imagem
	$nome_imagem =  $user[0] . "." . $ext[1];

	// Caminho de onde ficará a imagem
	$caminho_imagem = "images/users/" . $nome_imagem;

	// Faz o upload da imagem para seu respectivo caminho
	move_uploaded_file($img["tmp_name"], $caminho_imagem);
    	
    	// Insere os dados no banco
	$sql = mysql_query("UPDATE Usuario SET foto = '" . $nome_imagem . "' WHERE email = '" . $email . "'");	
    ?>
        <div class="content-full">
            <h1>
                Cadastro Realizado com Sucesso <br> <br>
            </h1>
            <a href="index.php"> Retornar à página principal </a>
        </div>
    </section>
<?php include 'footer.php'?>