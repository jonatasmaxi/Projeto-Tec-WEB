<?php include '../header.php'?>
<?php include '../aside.php'?>
    <body>
        <section>
            <div>
                <form name="cadastro" id="form" method="post" action="recebe_dados.php">
                    <label for="nome"> Nome*: </label> <input type="text" id="nome" name="nome"><br><br>
                    <label for="sobrenome"> Sobrenome*: </label> <input type="text" id="sobrenome"> <br><br>
                    <label for="foto"> Foto: </label> <input type="file" id="foto"> <br> <br>
                    Sexo*: <input type="radio" value="masculino"> Masculino  <input type="radio" value="feminino"> Feminino <br><br>
                    <label for="nascimento"> Data de Nascimento:* </label><input type="date" id="nascimento"><BR> <BR>
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
                    <label for="cidade"> Cidade*: </label> <input type="text" id="cidade"> <br><br>
                    <label for="email">E-mail*: </label> <input type="text" id="email"><br><br>
                    <label for="senha"> Senha*: </label> <input type="password" id="senha"><br><br>
                    <label for="confirmasenha"> Confirme a Senha*: </label> <input type="password" id="confirmasenha">
                    <br> <br> <input type="button" value="Enviar"> 
                    <input type="button" value="Cancelar">
                </form>
            </div>
      </section>
   </body>
<?php include '../footer.php'?>
</html>
