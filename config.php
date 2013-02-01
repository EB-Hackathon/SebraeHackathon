<?php

define('BD_USER', 'elzobrito'); // USE O TEU USUÁRIO DE BANCO DE DADOS
define('BD_PASS', 'zxasqw12'); // USE A TUA SENHA DO BANCO DE DADOS
define('BD_NAME', 'elzobrito'); // USE O NOME DO TEU BANCO DE DADOS

mysql_connect('mysql01.elzobrito.com', BD_USER, BD_PASS);
mysql_select_db(BD_NAME);

?>
