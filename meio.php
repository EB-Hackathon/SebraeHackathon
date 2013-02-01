
<div id="tudo">
    <div id="titulo"><h1>O Modelo de negocio Canvas</h1></div>
    <div id="designed">Criado por: <?php 
                                    if($_SESSION["nomeCriador"]==""){
                                        echo '<a href="#" id="criador" role="button">Adicionar um criador</a></div>';
                                    }
                                    else{
                                        echo $_SESSION["nomeCriador"].' - <a href="logout.php">Sair</a></div>';
                                    }
                                    ?>
    <div id="busines">Negócio: <?php 
                                    if($_SESSION["nomeNegocio"]==""){
                                        echo '<a href="#" id="negocio" role="button">Adicionar um Nome</a></div>';
                                    }
                                    else{
                                        echo $_SESSION["nomeNegocio"].'</div>';
                                    }
                                    ?>
    <div id="titulo">Data: <?php 
                                    if($_SESSION["data"]==""){
                                        echo '<a href="#" id="data" role="button">Adicionar uma data</a></div>';
                                    }
                                    else{
                                        echo $_SESSION["data"].'</div>';
                                    }
                                    ?>
<div class="row-fluid">
<?php include "quadro.php";?>
</div>
