<?php
  $conexion = mysql_connect("localhost", "root")or die("Problemas en la conexi�n con el servidor");
  mysql_select_db ("colsup", $conexion)or die("Problemas en la seleccion  de la Base de Datos");
?> 