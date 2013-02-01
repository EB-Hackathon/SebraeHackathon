<?php
    session_start();
    include "config.php";

    $id = $_POST['t'];
    $nome = $_POST['dado'];
    $id_obj = $_POST['a'];
    
    switch($id){
        case 0:{
            
            $unome = $_SESSION["nomeCriador"];
            if($nome != $unome){
                $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            
                while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
                }
            
            $uid = $_SESSION['user_id'];
            $sql = mysql_query("INSERT INTO sbh_parcerias (id_parceria, sbh_id_section, nome) VALUES(NULL, '{$uid}', '{$nome}')") or die( mysql_error() );
            }
            break;
        }

        case 1:{
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }
            
            $uid = $_SESSION['user_id'];
            $sql = mysql_query("INSERT INTO sbh_atividades (id_atividades, sbh_id_section, nome) VALUES(NULL, '{$uid}', '{$nome}')") or die( mysql_error() );
            break;
        }

        case 2:{
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }
            
            $uid = $_SESSION['user_id'];
            $sql = mysql_query("INSERT INTO sbh_recursos (id_recursos, sbh_id_section, nome) VALUES(NULL, '{$uid}', '{$nome}')") or die( mysql_error() );
            break;
        }
        case 3:{
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }
            
            $uid = $_SESSION['user_id'];
            $sql = mysql_query("INSERT INTO sbh_valor (id_valor, sbh_id_section, nome) VALUES(NULL, '{$uid}', '{$nome}')") or die( mysql_error() );
            break;
        }
        case 4:{
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }
            
            $uid = $_SESSION['user_id'];
            $sql = mysql_query("INSERT INTO sbh_Relacionamento (id_Relacionamento, sbh_id_section, nome) VALUES(NULL, '{$uid}', '{$nome}')") or die( mysql_error() );
            break;
        }
        case 5:{
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }
            
            $uid = $_SESSION['user_id'];
            $sql = mysql_query("INSERT INTO sbh_Canais (id_Canais, sbh_id_section, nome) VALUES(NULL, '{$uid}', '{$nome}')") or die( mysql_error() );
            break;
        }
        case 6:{
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }
            
            $uid = $_SESSION['user_id'];
            $sql = mysql_query("INSERT INTO sbh_Segmento (id_Segmento, sbh_id_section, nome) VALUES(NULL, '{$uid}', '{$nome}')") or die( mysql_error() );
            break;
        }
        case 7:{
             $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }
            
            $uid = $_SESSION['user_id'];
            $sql = mysql_query("INSERT INTO sbh_Estrutura (id_Estrutura, sbh_id_section, nome) VALUES(NULL, '{$uid}', '{$nome}')") or die( mysql_error() );
            break;
        }
        case 8:{
             $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }
            
            $uid = $_SESSION['user_id'];
            $sql = mysql_query("INSERT INTO sbh_Receitas (id_Receitas, sbh_id_section, nome) VALUES(NULL, '{$uid}', '{$nome}')") or die( mysql_error() );
            break;
        }

        case 9:{
        $_SESSION["nomeCriador"] = $nome;
        $sql = mysql_query("INSERT INTO sbh_id_section (id, nome) VALUES (NULL, '{$nome}')")or die( mysql_error() );
        break;
        }
        
        case 10:{

            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }
            $uid = $_SESSION['user_id'];
           $sql = mysql_query("UPDATE sbh_id_section SET negocio = '$nome' WHERE id = $uid;")or die( mysql_error() );
            $_SESSION["nomeNegocio"] = $nome;
            header ("Location:sbh.php");
        break;
        }

        case 11:{
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }
            $uid = $_SESSION['user_id'];
           $sql = mysql_query("UPDATE sbh_id_section SET data = '$nome' WHERE id = $uid;")or die( mysql_error() );
           $_SESSION["data"] = $nome;
           header ("Location:sbh.php");
        break;
        }

        case 12:{
             $sql = "DELETE FROM sbh_parcerias WHERE id_parceria = '$id_obj'";
            $query = mysql_query($sql) or die(mysql_error());
            header ("Location:sbh.php");
            break;
        }

    }
    include_once "quadro.php";
?>
