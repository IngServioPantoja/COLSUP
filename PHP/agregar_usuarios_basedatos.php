<!DOCTYPE html>
<html lang="es">
<head>
<meta charset='utf-8'>
<link rel="stylesheet" href="\colsup/hojadeestilos.css">
</head>
<?php
include 'conexion.php';
$atributos="insert into personas (";
$valores="values(";
if (!empty($_POST['PNA_FOTO'])){
$atributos=$atributos."PNA_FOTO"; $valores=$valores."'".$_POST['PNA_FOTO']."'";$PNA_FOTO=$_POST['PNA_FOTO'];}else{}
if (!empty($_POST['PNA_DOC_IDENTIDAD'])){
$atributos=$atributos.",PNA_DOC_IDENTIDAD"; $valores=$valores.",".$_POST['PNA_DOC_IDENTIDAD'];$PNA_DOC_IDENTIDAD=$_POST['PNA_DOC_IDENTIDAD'];}else{}
if (!empty($_POST['PNA_NOMBRE'])){
$atributos=$atributos.",PNA_NOMBRE"; $valores=$valores.",'".$_POST['PNA_NOMBRE']."'";$PNA_NOMBRE=$_POST['PNA_NOMBRE'];}else{}
if (!empty($_POST['PNA_APELLIDO'])){
$atributos=$atributos.",PNA_APELLIDO"; $valores=$valores.",'".$_POST['PNA_APELLIDO']."'";$PNA_APELLIDO=$_POST['PNA_APELLIDO'];}else{}
if (!empty($_POST['PNA_FECHA_NACIMIENTO'])){
$atributos=$atributos.",PNA_FECHA_NACIMIENTO"; $valores=$valores.",'".$_POST['PNA_FECHA_NACIMIENTO']."'";$PNA_FECHA_NACIMIENTO=$_POST['PNA_FECHA_NACIMIENTO'];}else{}
if (!empty($_POST['PNA_DIRECCION'])){
$atributos=$atributos.",PNA_DIRECCION"; $valores=$valores.",'".$_POST['PNA_DIRECCION']."'";$PNA_DIRECCION=$_POST['PNA_DIRECCION'];}else{}
if (!empty($_POST['PNA_TELEFONO'])){
$atributos=$atributos.",PNA_TELEFONO"; $valores=$valores.",".$_POST['PNA_TELEFONO'];$PNA_TELEFONO=$_POST['PNA_TELEFONO'];}else{}
if (!empty($_POST['PNA_USUARIO'])){
$atributos=$atributos.",PNA_USUARIO"; $valores=$valores.",'".$_POST['PNA_USUARIO']."'";$PNA_USUARIO=$_POST['PNA_USUARIO'];}else{}
if (!empty($_POST['PNA_PASSWORD'])){
$atributos=$atributos.",PNA_PASSWORD"; $valores=$valores.",'".$_POST['PNA_PASSWORD']."'";$PNA_PASSWORD=$_POST['PNA_PASSWORD'];}else{}
$select="select PNA_CODIGO from personas where PNA_DOC_IDENTIDAD=$PNA_DOC_IDENTIDAD LIMIT 1";
$query = mysql_query ($select)or die(mysql_error());
$fila=mysql_fetch_array($query, MYSQL_ASSOC);
$Total=mysql_num_rows($query);
if($Total>0){
header("Location:\COLSUP/registro.php?PNA_DOC_IDENTIDAD=$PNA_DOC_IDENTIDAD&PROBLEMA=Documento de identidad ya registrado&PNA_NOMBRE=$PNA_NOMBRE&PNA_APELLIDO=$PNA_APELLIDO&PNA_FECHA_NACIMIENTO=$PNA_FECHA_NACIMIENTO&PNA_DIRECCION=$PNA_DIRECCION&PNA_TELEFONO=$PNA_TELEFONO&PNA_USUARIO=$PNA_USUARIO");
}
else{
$atributos=$atributos.") ";
$valores=$valores.")";
$insert="";
$insert=$insert.$atributos.$valores;
$query = mysql_query ($insert)or die(mysql_error());
?>
<body>
		<div id="div_centro_centro">
			<div id="td_modalidades"><p id='titulo_formulario_inscripcion'>Usuario registrado Exitosamente</p></div>
			<meta HTTP-EQUIV="Refresh" CONTENT="2; URL=\colsup/registro.php" />
		</div>
</body>
</html>
<?php
}
?>


