<?php
if(isset($_COOKIE['contador'])){
  $valor=$_COOKIE['contador']+1;
  echo "es la visita $valor";
  
}
?>