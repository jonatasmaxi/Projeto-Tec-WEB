<?php include 'header.php'?>
            <section>
               <?php include 'aside.php'?>
                <div class="content">
                    <div class="slide">
                       <div class="area-total-abas">
                            <div class="abas">
                                <input type="radio" name="lista-abas" checked id="aba1" class="aba1"> <!-- checked especifica que o slide começa na aba 1 -->
                                <label for="aba1"><span><span>Personagens</span></span></label> <!-- nome da aba 1 -->
                                <input type="radio" name="lista-abas" id="aba2" class="aba2">
                                <label for="aba2"><span><span>Locais</span></span></label>  <!-- nome da aba 2-->
                                <input type="radio" name="lista-abas" id="aba3" class="aba3">
                                <label for="aba3"><span><span>Quotes</span></span></label>  <!--nome da aba 3-->
                                <input type="radio" name="lista-abas" id="aba4" class="aba4">
                                <label for="aba4"><span><span>Soundtrack</span></span></label>  <!--nome da aba 4-->
                                <ul>
                                    <li class="aba1">
                                            <div class="conteudo">
                                                    <h1>Personagens</h1> <!-- título da aba 1-->
                                                    <br>
                                                    <p>Conteúdo personagens</p> <!-- conteúdo da aba 1-->
                                            </div>
                                    </li>
                                    <li class="aba2">
                                            <div class="conteudo">
                                                    <h1>Locais</h1> <!-- título da aba 2 -->
                                                    <br>
                                                    <p>Conteúdo Locais</p> <!--conteúdo da aba 2-->
                                            </div>
                                    </li>
                                    <li class="aba3">
                                            <div class="conteudo">
                                                    <h1>Quotes</h1> <!--título da aba 3-->
                                                    <br>
                                                    <p>Conteúdo quotes</p> <!--conteúdo da aba 3-->
                                            </div>
                                    </li>
                                    <li class="aba4">
                                            <div class="conteudo">
                                                    <h1>Soundtrack</h1> <!--título da aba 4-->
                                                    <br>
                                                    <p>Conteúdo soundtrack</p> <!-- conteúdo da aba 4-->
                                            </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="gridLast">
                        <table class="tableLast">
                            <tr class="tableLastHeader">
                                <th colspan="3">Últimos produtos adicionados</th>
                            </tr>
                            <tr class="tableLastProduct">
                                <td>
                                    <img src="images/produto.jpg" width="100%"/>
                                    <h2>Smartphone Motorola Novo Moto G</h2>
                                    <h4>Preço: R$ 700,00</h4>
                                </td>
                                <td>
                                    <img src="images/produto.jpg" width="100%"/>
                                    <h2>Smartphone Motorola Novo Moto G</h2>
                                    <h4>Preço: R$ 700,00</h4>
                                </td> 
                                <td>
                                    <img src="images/produto.jpg" width="100%"/>
                                    <h2>Smartphone Motorola Novo Moto G</h2>
                                    <h4>Preço: R$ 700,00</h4>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="topUsers">
                        <table class="tableUsers">
                            <tr class="tableUsersHeader">
                                <th colspan="3">Top usuários</th>  
                            </tr>
                            <tr class="tableUsersTop">
                                <td>
                                    <img src="images/produto.jpg" width="100%"/>
                                    <h2>Smartphone Motorola Novo Moto G</h2>
                                    <h4>Preço: R$ 700,00</h4>
                                </td>
                                <td>
                                    <img src="images/produto.jpg" width="100%"/>
                                    <h2>Smartphone Motorola Novo Moto G</h2>
                                    <h4>Preço: R$ 700,00</h4>
                                </td> 
                                <td>
                                    <img src="images/produto.jpg" width="100%"/>
                                    <h2>Smartphone Motorola Novo Moto G</h2>
                                    <h4>Preço: R$ 700,00</h4>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
<?php include 'footer.php'?>