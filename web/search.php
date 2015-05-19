0,0<?php include 'connector_mysql.php'?>
<?php include 'header.php'?>
<section>
    <?php include 'aside.php'?>
    <div class="content">
        <div class="headCategory">
            <h1>Categoria Nome</h1>
            <div class="orderCategory">
	            <span>Ordenar por</span>
	            <select class="orderCategorySelector" name="orderCategory">
	                <option value="favoritados">Mais favoritados</option>
	                <option value="nomeAZ">Nome A-Z</option>
	                <option value="nomeZA">Nome Z-A</option>
	                <option value="menorPreco">Menor preço</option>
	                <option value="maiorPreco">Maior preço</option>
	            </select>
	    </div>
	                <table> 
	    <?php
		$busca = mysql_real_escape_string($_GET['search']);
		$sql = "SELECT * FROM Produto WHERE ((nome LIKE '%".$busca."%') OR ('%".$busca."%')) ORDER BY codProduto DESC";
		// Executa a consulta
		$resultado = mysql_query($sql);
		
		 if (mysql_num_rows($resultado) > 0){
                            $i = 0;
                            while($row = mysql_fetch_array($resultado)){	
                                    if (($i % 3) == 0){
                                            echo "<tr>";
                                    }
                                    $nome = "<a href = 'product.php?id=" . $row['codProduto'] . "'>" . $row['nome'] . "</a>";
                                    $imagem = "<a href = 'product.php?id=" . $row['codProduto'] . "'><img src='" . $row['imagem'] . "' width='100%'/></a>"; 
                                    echo "<td>
                                            $imagem
                                            <h2> $nome </h2>	
                                            <h4>Preço: R$ 700,00</h4>
                                          </td>";
                                    $i = $i + 1;
                                    if (($i % 3) == 0){
                                            echo "</tr>";
                                    }

                                }

                      }  
                      else{
                      	echo "Produto não encontrado";
	    }
	    ?>	    
            </table>
        </div>
    </div>
</section>
<?php include 'footer.php'?>