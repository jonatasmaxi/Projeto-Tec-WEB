<?php include '../header.php'?>
<?php include '../aside.php'?>
    <body>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("input").blur(function(){
                 if($(this).val() == "" )''
                     {
                         $(this).css({"border-color" : "#F00", "padding": "2px"});
                     }
                });
            })
        </script>
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
                    <br> <br> <input type="button" id="button" value="Enviar"> 
                    <input type="button" value="Cancelar">
                </form>
            </div>
      </section>
   </body>
<?php include '../footer.php'?>
       <script type="text/javascript">
            $(document).ready(function(){
                $("input").blur(function(){
                 if($(this).val() == "")
                     {
                         $(this).css({"border" : "1px solid #F00", "padding": "2px"});
                     }
                 else
                     {
                         $(this).css({"border" : "1px solid black", "padding": "2px"});
                     }
                });
                $("#confirmasenha").blur(function(){
                    if(($("#confirmasenha").val() != $("#senha").val())){
                        $("#confirmasenha").css({"border" : "1px solid #F00", "padding": "2px"});
                        cont++;
                    }   
                });
                $("#botao").click(function(){
                 var cont = 0;
                 $("#form input").each(function(){
                     if($(this).val() == "")
                         {
                             $(this).css({"border" : "1px solid #F00", "padding": "2px"});
                             cont++;
                         }
                    });
                 if(cont == 0)
                     {
                         $("#form").submit();
                     }
                });
            });
        </script>
</html>
