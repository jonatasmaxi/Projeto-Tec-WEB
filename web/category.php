<?php include 'header.php'?>
<section>
    <div class="headCategory">
        <h1>Breacrumb</h1>
        Ordenar por 
        <select class="orderCategorySelector" name="orderCategory">
            <option value="favoritados">Mais favoritados</option>
            <option value="nomeAZ">Nome A-Z</option>
            <option value="nomeZA">Nome Z-A</option>
            <option value="menorPreco">Menor preço</option>
            <option value="maiorPreco">Maior preço</option>
        </select>
        <table>
            <?php 
            echo"<tr>";
            for($i=0;$i<$v.length;$i++){
               if($i % 3 == 0){
                   echo"</tr><tr>";
               }
               echo"<td></td>";
            }
            echo"</tr>"
            ?>
            </table>
    </div>    
</section>
<?php include 'aside.php'?>
<?php include 'footer.php'?>'
