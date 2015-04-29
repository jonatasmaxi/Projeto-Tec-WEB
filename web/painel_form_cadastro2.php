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
                    <label for="senha"> Senha*: </label> <input type="password" id="senha" required placeholder="Escolha uma senha" name="senha"><br><br>
                    <label for="confirmasenha"> Confirme a Senha*: </label> <input type="password" required placeholder="Repita a senha" id="confirmasenha" name="confirmasenha">
                    <br> <br> <input type="button" id="botao" value="Enviar"> 
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
                         cont++;
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
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>
// just for the demos, avoids form submit
    jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
    });
    $( "#formcadastro2" ).validate({
      rules: {
        senha: {
          minlength: 6
        }
      }
    });
</script>