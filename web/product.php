<?php include 'connector_mysql.php'?>
<?php include 'header.php'?>
<section>
    <?php include 'aside.php'?>
    <div class="content">
    		<?php 
    			$sql = "SELECT * FROM Produto WHERE codProduto=". $_GET["id"];
                        $resultado = mysql_query($sql);
                            while($row = mysql_fetch_array($resultado)){
	                            $nome = $row['nome'];
	                            $imagem = $row['imagem'];
	                            echo "<img src='$imagem' width='100%'/><h2> $nome </h2><h4>Preço: R$ 700,00</h4>";
                            }
                        mysql_close();
                ?>	
    </div>
</section>
<?php include 'footer.php'?>