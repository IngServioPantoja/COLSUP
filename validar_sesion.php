<?php
include '/PHP/conexion.php';
echo $usuario =$_POST['usuario'];
echo $password =$_POST['password'];
echo $usuario=$usuario;
echo $password=$password;
echo $consulta = "select PNA_CODIGO from personas where PNA_USUARIO='$usuario' AND PNA_PASSWORD='$password' limit 1";
$query = mysql_query ($consulta);
$fila=mysql_fetch_array($query, MYSQL_ASSOC);
$Total=mysql_num_rows($query);
if($Total>0){
?>
<html>
  <head>
  <script language="javascript" type="text/javascript">
    function mandar(){
      document.f0.submit();
    }
  </script>
  </head>
  
  <body onLoad="javascript:mandar();">

		<form name="f0" id="f0" method="post" action="\colsup/panel.php" target="_parent">
    	</form>

	
  </body>
</html>
<?php
}else{
echo ("<meta http-equiv='Refresh' content='0;url=\colsup/iniciar_sesion.html'>");
}
?> 