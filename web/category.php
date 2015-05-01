<?php include 'connector_mysql.php'?>
<?php include 'header.php'?>
<section>
        <div class="headCategory">
        <h1>Breacrumb</h1>
        <span>Ordenar por</span> 
        <select class="orderCategorySelector" name="orderCategory">
            <option value="favoritados">Mais favoritados</option>
            <option value="nomeAZ">Nome AZ</option>
            <option value="nomeZA">Nome ZA</option>
            <option value="menorPreco">Menor preço</option>
            <option value="maiorPreco">Maior preço</option>
        </select>
        <table> 
             <?php 
             	    $sql = "SELECT * FROM Produto"; 
                    $resultado = mysql_query($sql);
                    if (mysql_num_rows($resultado) > 0){
                    	$i = 0;
                    	while($row = mysql_fetch_array($resultado)){	
				if (($i % 3) == 0){
				        echo "<tr>";
				}
		                $nome = $row['nome'];
		                $imagem = $row['imagem'];
		                echo "<td>
		                        <img src='$imagem' width='100%'/>
		                        <h2> $nome </h2>	
		                        <h4>Preço: R$ 700,00</h4>
		                      </td>";
		                $i = $i + 1;
		                if (($i % 3) == 0){
				        echo "</tr>";
				}
	                        
	                    }
	    
                  }  
	     
	     ?>  
       </table>
    </div>
</section>
<?php include 'aside.php'?>
<?php include 'footer.php'?>'