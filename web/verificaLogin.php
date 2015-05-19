<?php
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
      include "connector_mysql.php";
      $encontrou = false;
      $resultado = mysql_query("SELECT * from Usuario WHERE email='$email'");
      if($resultado){
          while($row = mysql_fetch_array($resultado) ){
             if($row['email'] == $email && $row['senha'] == $senha)
             {
                echo "<h3>Bem vindo $email</h3>";
                $encontrou = true;
                $nome = $row['nome'];
                setcookie('email', $email, time()+(24*60*60) );
                setcookie('senha', $senha, time()+(24*60*60) );
                setcookie('nome', $nome, time()+(24*60*60) );
             }
          }
      }

      if(!$encontrou)  
	   	echo("<script language = 'javascript'> alert('Email ou senha incorreta!'); </script>");
	   	echo("<script language=\"javascript\">history.go(-1);</script>");
      // fechamento da conexão   
      mysql_close($conexao);

?>