<?php

session_start();
session_destroy();
  if(!session_is_registered('nome')){
		header ("Location:index.php");
	}


?>
