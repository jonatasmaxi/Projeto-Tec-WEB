<?php
$link = mysql_connect('ckodecom_coink', 'ckodecom_coink', 'password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';
mysql_close($link);
?>