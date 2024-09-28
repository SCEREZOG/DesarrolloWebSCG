<?php
$con = new mysqli("localhost", "root",  "", "bd_parcial1");
if ($con->connect_error) {
  die("conexion fallida" . $con->connect_error);
}
