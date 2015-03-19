<?php include '../header.php'?>
<?php include '../aside.php'?>
    <body>
        <section>
            <div>
                <form name="cadastro" id="form" method="post" action="Formulariodecadastro.php">
                    <label for="nome"> Nome*: </label> <input type="text" id="nome" name="nome"><br><br>
                    <label for="sobrenome"> Sobrenome*: </label> <input type="text" name="sobrenome" id="sobrenome"> <br><br>
                    <label for="foto"> Foto: </label> <input type="file" id="foto"> <br> <br>
                    Sexo*: <input type="radio" value="masculino"> Masculino  <input type="radio" value="feminino"> Feminino <br><br>
                    <label for="nascimento"> Data de Nascimento:* </label><input type="date" name="nascimento" id="nascimento"><BR> <BR>
                    Estado: <select name="estado">
                        <option value="AC"> AC </option>
                        <option value="AL"> AL </option>
                        <option value="AP"> AP </option>
                        <option value="AM"> AM </option>
                        <option value="BA"> BA </option>
                        <option value="CE"> CE </option>
                        <option value="DF"> DF </option>
                        <option value="ES"> ES </option>
                        <option value="GO"> GO </option>
                        <option value="MA"> MA </option>
                        <option value="MT"> MT </option>
                        <option value="MS"> MS </option>
                        <option value="MG"> MG </option>
                        <option value="PA"> PA </option>
                        <option value="PB"> PB </option>
                        <option value="PE"> PE </option>
                        <option value="PI"> PI </option>
                        <option value="PR"> PR </option>
                        <option value="RJ"> RJ </option>
                        <option value="RN"> RN </option>
                        <option value="RS"> RS </option>
                        <option value="RO"> RO </option>
                        <option value="RR"> RR </option>
                        <option value="SC"> SC </option>
                        <option value="SP"> SP </option>
                        <option value="SE"> SE </option>
                        <option value="TO"> TO </option>
                    </select>
                    <label for="cidade"> Cidade*: </label> <input type="text" name="cidade" id="cidade"> <br><br>
                    <label for="email">E-mail*: </label> <input type="text" name="email" id="email"><br><br>
                    <label for="senha"> Senha*: </label> <input type="password" name="senha" id="senha"><br><br>
                    <label for="confirmasenha"> Confirme a Senha*: </label> <input type="password" name="confirmasenha"id="confirmasenha">
                    <br> <br> <input type="submit" value="Enviar"> 
                    <input type="button" value="Cancelar">
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
                </form>
            </div>
      </section>
   </body>
<?php include '../footer.php'?>
</html>
