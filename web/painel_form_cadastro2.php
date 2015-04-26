<!DOCTYPE HTML>
<html>
<?php include 'header.php'?>
<?php include 'aside.php'?>
<?php
                 echo $_POST['nome'];
                echo $_POST['email'];
 ?>
<body>
        <section>
            <div>
                <form name="formcadastro2" id="formcadastro2" method="POST" action="painel_form_cadastro3.php">
                    <label for="user"> Usuário*: </label><input type="text" pattern="[a-zA-Z0-9]+" required id="user" name="user" placeholder="Escolha um nome de usuário"> Somente letras e números <br><br>
                    <label for="senha"> Senha*: </label> <input type="password" id="senha" placeholder="Escolha uma senha" name="senha"><br><br>
                    <label for="confirmasenha"> Confirme a Senha*: </label> <input type="password" value="" placeholder="Repita a senha" id="confirmasenha" name="confirmasenha">
                    <br> <br> <input type="submit" id="botao" value="Enviar"> 
                    <input type="button" value="Cancelar">
                </form>
            </div>
      </section>
   </body>
<?php include 'footer.php'?>
</html>
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
 <script type="text/javascript">
            var cont = 0;
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
                 $("#formcadastro2 input").each(function(){
                     if($(this).val() == "")
                         {
                             $(this).css({"border" : "1px solid #F00", "padding": "2px"});
                             cont++;
                         }
                    });
                 if(cont == 0)
                     {
                         $("#formcadastro2").submit();
                     }
                });
            });
</script>