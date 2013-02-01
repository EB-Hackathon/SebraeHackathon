<?php
session_start();
if($_SESSION["inicio"]=="sim" && $_SESSION["gravou"] == "nao"){
echo '<div class="modal" id="infoModal">';
echo '      <div class="modal-header">';
echo '          <button type="button" class="close" onClick="fecha()" data-dismiss="modal" aria-hidden="true">&times;</button>';

echo '          <h3>Digite algumas informações básicas</h3>';
echo '<div id="um"></div>';
echo '      </div>';
echo '      <div class="modal-body">';
echo '<div class="input-prepend"><span class="add-on">Digite seu nome: </span><input type="text" name="nome" id="nome" data-provide="typeahead"></div>';
echo '      </div>';

echo '      <div class="modal-footer">';
echo '          <a class="btn btn-primary" href="#" onClick="salva()">OK</a>';
echo '      </div>';
echo '</div>';
        $_SESSION["gravou"] = "sim";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Hackthon Sebrae</title>
    
        <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 0px;
        padding-bottom: 40px;
      }
    </style>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/bootstrap-responsive.css" rel="stylesheet">
      <link href="css/docs.css" rel="stylesheet">
      <link href="css/prettify.css" rel="stylesheet">
      <link href="css/StyleSheet.css" rel="stylesheet">
  <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

   <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/forms.js"></script>
    <script src="js/Script.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <script>
        function salva(n) {
            $(document).ready(function () {
                var nome = $("input[name=nome]").val();
                $("div[id=msg]").load("postit.php", { t: 9, dado: nome });
                $("a[id=criador]").html('<a href="#" id="criador" role="button">'+nome+'</a>');
                $("div[id=infoModal]").fadeOut();
            });
        }
    </script>
    </head>

