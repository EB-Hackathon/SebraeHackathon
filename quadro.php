<div id="quadro">
        <div id="quadro1">Parcerias principais
            <ul id="itensQuadro1">
                <?php
            include "config.php";
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }

            $uid = $_SESSION['user_id'];
            $sql = mysql_query("SELECT * FROM sbh_parcerias WHERE sbh_id_section = '$uid'");
            while($row = mysql_fetch_array($sql)){
                    echo '<li>'.$row['nome'].'<a href="del.php?t=0&a='.$row['id_parceria'].'"><img src="img/b_drop.png"></a></li>';
            }
                ?>
            </ul>
            <a href="#" id="linkQuadro1" role="button" class="btn">+</a>
        </div>    
        <div id="quadro2">Atividades Principais
            <ul id="itensQuadro2">
                <?php
            include "config.php";
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }

            $uid = $_SESSION['user_id'];
            $sql = mysql_query("SELECT * FROM sbh_atividades WHERE sbh_id_section = '$uid'");
            while($row = mysql_fetch_array($sql)){
                    echo '<li>'.$row['nome'].'<a href="del.php?t=1&a='.$row['id_atividades'].'"><img src="img/b_drop.png"></a></li>';
            }
                ?>
            </ul>
            <a href="#" id="linkQuadro2" role="button" class="btn">+</a>
        </div>
        <div id="quadro3">Recursos Principais
            <ul id="itensQuadro3">
                <?php
            include "config.php";
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }

            $uid = $_SESSION['user_id'];
            $sql = mysql_query("SELECT * FROM sbh_recursos WHERE sbh_id_section = '$uid'");
            while($row = mysql_fetch_array($sql)){
                    echo '<li>'.$row['nome'].'<a href="del.php?t=2&a='.$row['id_recursos'].'"><img src="img/b_drop.png"></a></li>';
            }
                ?>
            </ul>
            <a href="#" id="linkQuadro3" role="button" class="btn">+</a>
        </div>
        <div id="quadro4">Valor de Proposta
            <ul id="itensQuadro4">
                <?php
            include "config.php";
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }

            $uid = $_SESSION['user_id'];
            $sql = mysql_query("SELECT * FROM sbh_valor WHERE sbh_id_section = '$uid'");
            while($row = mysql_fetch_array($sql)){
                    echo '<li>'.$row['nome'].'<a href="del.php?t=3&a='.$row['id_valor'].'"><img src="img/b_drop.png"></a></li>';
            }
                ?>
            </ul>
            <a href="#" id="linkQuadro4" role="button" class="btn">+</a>
        </div>
        <div id="quadro5">Relacionamento com Clientes
            <ul id="itensQuadro5">
<?php
            include "config.php";
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }

            $uid = $_SESSION['user_id'];
            $sql = mysql_query("SELECT * FROM sbh_Relacionamento WHERE sbh_id_section = '$uid'");
            while($row = mysql_fetch_array($sql)){
                    echo '<li>'.$row['nome'].'<a href="del.php?t=4&a='.$row['id_Relacionamento'].'"><img src="img/b_drop.png"></a></li>';
            }
                ?>
            </ul>
            <a href="#" id="linkQuadro5" role="button" class="btn">+</a>
        </div>
        <div id="quadro6">Canais
            <ul id="itensQuadro6">
<?php
            include "config.php";
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }

            $uid = $_SESSION['user_id'];
            $sql = mysql_query("SELECT * FROM sbh_Canais WHERE sbh_id_section = '$uid'");
            while($row = mysql_fetch_array($sql)){
                    echo '<li>'.$row['nome'].'<a href="del.php?t=5&a='.$row['id_Canais'].'"><img src="img/b_drop.png"></a></li>';
            }
                ?>
            </ul>
            <a href="#" id="linkQuadro6" role="button" class="btn">+</a>
        </div>
        <div id="quadro7">Segmento de Clientes
            <ul id="itensQuadro7">
<?php
            include "config.php";
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }

            $uid = $_SESSION['user_id'];
            $sql = mysql_query("SELECT * FROM sbh_Segmento WHERE sbh_id_section = '$uid'");
            while($row = mysql_fetch_array($sql)){
                    echo '<li>'.$row['nome'].'<a href="del.php?t=6&a='.$row['id_Segmento'].'"><img src="img/b_drop.png"></a></li>';
            }
                ?>
            </ul>
            <a href="#" id="linkQuadro7" role="button" class="btn">+</a>
        </div>
        <div id="quadro8">Estrutura de Custos
            <ul id="itensQuadro8">
                <?php
            include "config.php";
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }

            $uid = $_SESSION['user_id'];
            $sql = mysql_query("SELECT * FROM sbh_Estrutura WHERE sbh_id_section = '$uid'");
            while($row = mysql_fetch_array($sql)){
                    echo '<li>'.$row['nome'].'<a href="del.php?t=7&a='.$row['id_Estrutura'].'"><img src="img/b_drop.png"></a></li>';
            }
                ?>
            </ul>
            <a href="#" id="linkQuadro8" role="button" class="btn">+</a>
        </div>
        <div id="quadro9">Receitas
            <ul id="itensQuadro9">
                <?php
            include "config.php";
            $unome = $_SESSION["nomeCriador"];
            $sql = mysql_query("SELECT id FROM sbh_id_section WHERE nome LIKE '$unome'");
            while($row = mysql_fetch_array($sql)){
                    $_SESSION['user_id'] = $row['id'];
            }

            $uid = $_SESSION['user_id'];
            $sql = mysql_query("SELECT * FROM sbh_Receitas WHERE sbh_id_section = '$uid'");
            while($row = mysql_fetch_array($sql)){
                    echo '<li>'.$row['nome'].'<a href="del.php?t=08a='.$row['id_Receitas'].'"><img src="img/b_drop.png"></a></li>';
            }
                ?>
            </ul>
            <a href="#" id="linkQuadro9" role="button" class="btn">+</a>
        </div>
    </div>
</div>
<div id="msg"></div>
