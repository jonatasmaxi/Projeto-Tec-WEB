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
	                            echo "<img src='$imagem' width='100%'/><h2> $nome </h2><h4>Preço: R$ 7000,00</h4>";
                            }
                ?>	
                <table class="product">
                	<div class="column">
	                	<ul>
	                		<?php 
	                		$sql = "SELECT * FROM Oferta INNER JOIN Produto ON Oferta.codProduto = Produto.codProduto WHERE codSite IS NULL AND Oferta.codProduto = " . $_GET['id'] . " ORDER BY preco ASC";
                        		$resultado = mysql_query($sql);
                            			while($row = mysql_fetch_array($resultado)){
				                            $nome = $row['nome'];
				                            $preco = $row['preco'];
				                            echo "<li><h2> $nome </h2> $preco</li>";
                            		}
                            		?>
                            		<li>teste</li>
	                	<ul>
	                </div>
	                <div class="column">
	                	<ul>
	                		<li>teste</li>
	                	<ul>
	                </div>
                </table>
    </div>
</section>
<?php include 'footer.php'?>