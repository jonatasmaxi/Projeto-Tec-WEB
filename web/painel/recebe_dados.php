<?php 
     $nome = $_POST["nome"];
     $sobrenome = $_POST["sobrenome"];
     $cidade = $_POST["cidade"];
     $senha = $_POST["senha"];
     $confirmasenha = $_POST["confirmasenha"] ;
     $nascimento = $_POST['nascimento'];
     if (empty($nome))
       {echo "Favor digitar seu nome corretamente.<br>"; $erro=1;}
?>