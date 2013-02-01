<script type="text/javascript">
    function fecha() {
        $(document).ready(function () {
            $("div[id=infoModal]").fadeOut();
        });
    }

    function salva() {
        $(document).ready(function () {
            var nome = $("input[name=nome]").val();
            var numero = $("input[name=n]").val();
             $("div[id=msg]").load("postit.php", { t: numero, dado:nome});
             $("div[id=infoModal]").fadeOut();
        });
    }

</script>


<?php

    $titulo[0]="Parcerias principais";
    $titulo[1]="Atividades Principais";
    $titulo[2]="Recursos Principai";
    $titulo[3]="Valor de Proposta";
    $titulo[4]="Relacionamento com Clientes";
    $titulo[5]="Canais";
    $titulo[6]="Segmento de Clientes";
    $titulo[7]="Estrutura de Custos";
    $titulo[8]="Receitas";
    $titulo[9]="Criador";
    $titulo[10]="Negocio";
    $titulo[11]="Data";

    $nTitulo = $_POST['n'];

    $conteudo[0] = '<div class="input-prepend"><span class="add-on">Parcerias: </span><input type="text" name="nome" id="nome" data-provide="typeahead"></div>';
    $conteudo[1] = '<div class="input-prepend"><span class="add-on">Atividades: </span><input type="text" name="nome" id="nome" data-provide="typeahead"></div>';
    $conteudo[2] = '<div class="input-prepend"><span class="add-on">Recursos: </span><input type="text" name="nome" id="nome" data-provide="typeahead"></div>';
    $conteudo[3] = '<div class="input-prepend"><span class="add-on">Valor: </span><input type="text" name="nome" id="nome" data-provide="typeahead"></div>';
    $conteudo[4] = '<div class="input-prepend"><span class="add-on">Relacionamento: </span><input type="text" name="nome" id="nome" data-provide="typeahead"></div>';
    $conteudo[5] = '<div class="input-prepend"><span class="add-on">Canais: </span><input type="text" name="nome" id="nome" data-provide="typeahead"></div>';
    $conteudo[6] = '<div class="input-prepend"><span class="add-on">Segmento: </span><input type="text" name="nome" id="nome" data-provide="typeahead"></div>';
    $conteudo[7] = '<div class="input-prepend"><span class="add-on">Estrutura: </span><input type="text" name="nome" id="nome" data-provide="typeahead"></div>';
    $conteudo[8] = '<div class="input-prepend"><span class="add-on">Receita: </span><input type="text" name="nome" id="nome" data-provide="typeahead"></div>';
    $conteudo[9] = '<div class="input-prepend"><span class="add-on">Criador: </span><input type="text" name="nome" id="nome" data-provide="typeahead"></div>';
    $conteudo[10] = '<div class="input-prepend"><span class="add-on">Negocio: </span><input type="text" name="nome" id="nome" data-provide="typeahead"></div>';
    $conteudo[11] = '<div class="input-prepend"><span class="add-on">Data: </span><input type="text" name="nome" id="nome" data-provide="typeahead"></div>';

echo '<div class="modal" id="infoModal">';
echo '      <div class="modal-header">';
echo '          <button type="button" class="close" onClick="fecha()" data-dismiss="modal" aria-hidden="true">&times;</button>';

echo '          <h3>'.$titulo[$nTitulo].'</h3>';
echo '          <h5> </h5>';
echo '      </div>';
echo '      <div class="modal-body">';
echo '          <ul class="nav nav-pills nav-stacked">';

echo            $conteudo[$nTitulo];

echo '<input type="hidden" name="n" value="'.$nTitulo.'">';

echo '          </ul>';
echo '      </div>';

echo '      <div class="modal-footer">';
echo '          <a class="btn btn-primary" href="#" onClick="salva()">OK</a>';
echo '      </div>';
echo '</div>';
echo '<div id="msg"></div>';
?>
