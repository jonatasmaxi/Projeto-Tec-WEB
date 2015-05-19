<?php include 'header.php'?>
    <section>
        <?php include 'aside.php'?>
        <div class="content">
             
            	Selecione o produto: 
            	<select name="produto">
            		<option value=''> </option>
            		<?php 
	    			$sql = "SELECT * FROM Produto";
	                        $resultado = mysql_query($sql);
	                            while($row = mysql_fetch_array($resultado)){
		                            $nome = $row['nome'];
		                            $id= $row['codProduto'];
		                            echo "<option value='$id'>$nome</option>";
	                            }
                	?>
                </select>	
		<br>
		<br>
		<form name="cadastroproduto" method="post" action="painel_form_cadastro_produto.php" id="form">
                <label for="nomeloja"> Loja: </label> <input type="text" id="nomeloja" name="nomeloja"><br> <br>
                <label for="enderecoloja"> Endereço da loja: </label><input type="text" id="enderecoloja" name="enderecoloja"> 
                Estado:<select name="estado">
                        <option value=" "> </option>
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
                </select><br><br>
                <label for="preco"> Preço: </label><input type="text" id="preco" name="preco"><br><br>
                <input type="button" name="Cancelar" value="Cancelar">
            </form>
            <?php
            	   $sql = "SELECT * FROM Produto WHERE codProduto = " . $_POST["produto"];
	                        $resultado = mysql_query($sql);
	                        while($row = mysql_fetch_array($resultado)){
		                            $nome = $row['nome'];
		                            echo "Produto selecionado: $nome";
	                        }
            	    $sql = "INSERT INTO Oferta (codProduto,loja,preco,endLojaFisica,estLojaFisica) VALUES ('". $_POST["produto"] ."','".$_POST['nomeloja']."','".$_POST['preco']."','".$_POST['enderecoloja']."','".$_POST['estado']."')";
		    $resultado = mysql_query($sql);
    	    ?>
        </div>
    </section>
<?php include 'footer.php'?>
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
            $("#botao2").click(function(){
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