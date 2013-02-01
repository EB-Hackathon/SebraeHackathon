<?php
    include "config.php";

    $id = $_GET['t'];
    $id_obj = $_GET['a'];


    echo $id.' -- '.$id_obj;
    switch($id){
        case 0:{
            $sql = "DELETE FROM sbh_parcerias WHERE id_parceria = '$id_obj'";
            $query = mysql_query($sql) or die(mysql_error());
            header ("Location:sbh.php");
        break;
        }
        case 1:{
            $sql = "DELETE FROM sbh_atividades WHERE id_atividades = '$id_obj'";
            $query = mysql_query($sql) or die(mysql_error());
            header ("Location:sbh.php");
        break;
        }
        case 2:{
            $sql = "DELETE FROM sbh_recursos WHERE id_recursos = '$id_obj'";
            $query = mysql_query($sql) or die(mysql_error());
            header ("Location:sbh.php");
        break;
        }
        case 3:{
            $sql = "DELETE FROM sbh_valor WHERE id_valor = '$id_obj'";
            $query = mysql_query($sql) or die(mysql_error());
            header ("Location:sbh.php");
        break;
        }
        case 4:{
            $sql = "DELETE FROM sbh_Relacionamento WHERE id_Relacionamento = '$id_obj'";
            $query = mysql_query($sql) or die(mysql_error());
            header ("Location:sbh.php");
        break;
        }
        case 5:{
            $sql = "DELETE FROM sbh_Canais WHERE id_Canais = '$id_obj'";
            $query = mysql_query($sql) or die(mysql_error());
            header ("Location:sbh.php");
        break;
        }
        case 6:{
            $sql = "DELETE FROM sbh_Segmento WHERE id_Segmento = '$id_obj'";
            $query = mysql_query($sql) or die(mysql_error());
            header ("Location:sbh.php");
        break;
        }
        case 7:{
            $sql = "DELETE FROM sbh_Estrutura WHERE id_Estrutura = '$id_obj'";
            $query = mysql_query($sql) or die(mysql_error());
            header ("Location:sbh.php");
        break;
        }
        case 8:{
            $sql = "DELETE FROM sbh_Receitas WHERE id_Receitas = '$id_obj'";
            $query = mysql_query($sql) or die(mysql_error());
            header ("Location:sbh.php");
        break;
        }
    }
