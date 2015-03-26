<!DOCTYPE HTML>
<html>
<?php include '../header.php'?>
<?php include '../aside.php'?>
    <body>
        <div>
            <form name="cadastroproduto" method="post" action="Formulariodecadastroproduto.php">
                <label for="nomeproduto"> Nome do Produto: </label><input type="text"id="nomeproduto" name="nomeproduto"> <br> <br> 
                <label for="nomeloja"> Nome da Loja em que o produto foi encontrado: </label> <input type="text" id="nomeloja" name="nomeloja"><br> <br>
                <label for="enderecoloja"> Endereço da loja: </label><input type="text" id="enderecoloja" name="enderecoloja"> <br> <br>
                Estado:<select name="estado">
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
            </form>
        </div>
    </body>
</html>
