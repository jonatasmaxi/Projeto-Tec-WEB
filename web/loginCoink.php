<?php include 'connector_mysql.php'?>
<?php include 'header.php'?>
<section>
    <div class="content-full">
        <form action="verificaLogin.php" method="POST">
            <label>Email</label><br>
            <input type="text" name="email" id="email"/>
            <br><br>
            <label>Password</label><br>
            <input type="text" name="senha" id="senha"/><br><br>
            <input type="submit" value="Login"/>
        </form>
    </div>
</section>
<?php include 'footer.php'?>