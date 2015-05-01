<meta charset="UTF-8">
<?php 
     $erro=0;
     $nome = $_POST["nome"];
     $sobrenome = $_POST["sobrenome"];
     $cidade = $_POST["cidade"];
     $senha = $_POST["senha"];
     $confirmasenha = $_POST["confirmasenha"] ;
     $nascimento = $_POST['nascimento'];
     $email = $_POST['email'];
     if (empty($nome) )
        {echo "O campo nome não pode estar vazio.<br>"; $erro++;}
     if (empty($sobrenome))
       {echo "O campo sobrenome não pode estar vazio.<br>"; $erro++;}
     if (empty($cidade))
       {echo "O campo cidade não pode estar vazio.<br>"; $erro++;}
     if (empty($senha))
       {echo "O campo senha não pode estar vazio.<br>"; $erro++;}
     if (empty($confirmasenhasenha))
       {echo "O campo confirma a senha não pode estar vazio.<br>"; $erro++;}
     if (empty($email))
        {echo "O campo email não pode estar vazio.<br>"; $erro++;}
       
?>