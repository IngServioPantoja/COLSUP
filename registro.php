<?php 
if (!empty($_GET['PROBLEMA'])){$PROBLEMA=$_GET['PROBLEMA']; $identificacion_registro="identificacion_registro_error";}else{$PROBLEMA="Maximo 20 digitos Cedula O T.I.";$identificacion_registro="identificacion_registro2";}
if (!empty($_GET['PNA_FOTO'])){$PNA_FOTO=$_GET['PNA_FOTO'];}else{}
if (!empty($_GET['PNA_DOC_IDENTIDAD'])){$PNA_DOC_IDENTIDAD=$_GET['PNA_DOC_IDENTIDAD'];}else{$PNA_DOC_IDENTIDAD=NULL;}
if (!empty($_GET['PNA_NOMBRE'])){$PNA_NOMBRE=$_GET['PNA_NOMBRE'];}else{$PNA_NOMBRE=NULL;}
if (!empty($_GET['PNA_APELLIDO'])){$PNA_APELLIDO=$_GET['PNA_APELLIDO'];}else{$PNA_APELLIDO=NULL;}
if (!empty($_GET['PNA_FECHA_NACIMIENTO'])){$PNA_FECHA_NACIMIENTO=$_GET['PNA_FECHA_NACIMIENTO'];}else{$PNA_FECHA_NACIMIENTO=NULL;}
if (!empty($_GET['PNA_DIRECCION'])){$PNA_DIRECCION=$_GET['PNA_DIRECCION'];}else{$PNA_DIRECCION=NULL;}
if (!empty($_GET['PNA_TIPO_RH'])){$PNA_TIPO_RH=$_GET['PNA_TIPO_RH'];}else{$PNA_TIPO_RH=NULL;}
if (!empty($_GET['PNA_TELEFONO'])){$PNA_TELEFONO=$_GET['PNA_TELEFONO'];}else{$PNA_TELEFONO=NULL;}
if (!empty($_GET['PNA_TIPO'])){$PNA_TIPO=$_GET['PNA_TIPO'];}else{$PNA_TIPO=4;}
if (!empty($_GET['PNA_USUARIO'])){$PNA_USUARIO=$_GET['PNA_USUARIO'];}else{$PNA_USUARIO=NULL;}
if (!empty($_FILES['PNA_FOTO']['name'])){$nameimagen = $_FILES['PNA_FOTO']['name'];}else{$nameimagen="";}
if (!empty($_FILES['PNA_FOTO']['tmp_name'])){$tmpimagen = $_FILES['PNA_FOTO']['tmp_name'];}else{$tmpimagen="";}
if (!empty($_GET['PNA_FOTO'])){$PNA_FOTO=$_GET['PNA_FOTO'];}else{$PNA_FOTO="IMAGENES/escudo2.jpg";}
$extimagen = pathinfo($nameimagen);
$ext = array("png","gif","jpg");
$urlnueva = "fotos/".$nameimagen;


if(is_uploaded_file($tmpimagen)) {
		if (in_array($extimagen['extension'],$ext)) {
		copy ($tmpimagen,$urlnueva);
		$accionfoto="Se ha guardado correctamente";
		header("Location: registro.php?accionfoto=$accionfoto&PNA_FOTO=$urlnueva");
		} else {
		$accionfoto="ERROR: solo imagenes con formato png,gif,jpg)";
		}
	}else {
		if (!empty($_GET['accionfoto'])){$accionfoto=$_GET['accionfoto'];}else{$accionfoto="Elija una imagen";}
		}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset='utf-8'>
<link rel="stylesheet" href="hojadeestilos.css">
<title>Sport Body Norte Admin Client</title>
</head>
<script src='http://code.jquery.com/jquery-1.7.2.min.js'></script>
<script src="http://code.jquery.com/jquery-1.5.js"></script>
<script src="js/jquery.js"></script>
<script src="js/modernizr.js"></script>
<body>
<div>
  <table width="99%" height="100%" align="center" class="tabla_2_x_2_imagenes" id="tabla_index_1" name='tabla_agregar_clientes'>
    <tr>
      <td height="325"><table width="100%">
          <tr>
            <td height="21" colspan="4" align="center" id="td_modalidades"><p id='titulo_formulario_inscripcion'>Formulario de inscribcion COLSUP</p></td>
          </tr>
          <tr>
            <td height="23" colspan="4" align='center'><form action="registro.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <div align="center">
<table width="100%">
  <tr>
    <td> <p align="center"><input type="file" id="file" name='PNA_FOTO'/>
</td>
  </tr>
</table>
<img src="<?php echo $PNA_FOTO;?>" width="190" height="190" /> <br>
<input type="submit" name="Submit" value="Aplicar" id='boton-ingresar-peque' />
              </div>
            </form></td>
          </tr>
		              
<form action='PHP/agregar_usuarios_basedatos.php' method='post' name='formulario_agregar_clientes' target='internal'>
            <tr>
              <td colspan="2" align="center">
                <p id='subtexto_documento_registro'>Identificacion :</p>
                <p id='subtexto_documento_registro'>Nombres :</p>
                <p id='subtexto_documento_registro'>Apellidos :</p>
                <p id='subtexto_documento_registro'>Fecha Ncimiento :</p>
                <p id='subtexto_documento_registro'>Direccion :</p>
                <p id='subtexto_documento_registro'>Telefono :</p></td>
			
              <td width="21%">
                <p>
                  <input name="PNA_DOC_IDENTIDAD" type="text" id="identificacion_registro"  maxlength="20" placeholder='Identificacion' pattern="[0-9]{8,20}" value="<?php echo $PNA_DOC_IDENTIDAD;?>" autofocus required>
                  
                </p>
                <p>
                  <input id='nombres_registro' name='PNA_NOMBRE' type=text placeholder='Nombres' maxlength='30' value='<?php echo $PNA_NOMBRE;?>' required>
                  
                </p>
                <p>
                  <input id='apellidos_registro' name='PNA_APELLIDO' type=text placeholder='Apellidos' maxlength='30' value='<?php echo $PNA_APELLIDO;?>' required>
                  
                </p>
                <p>
                  <input id='edad_registro' name='PNA_FECHA_NACIMIENTO' type=date min='0' max='<?php echo $fech_actual=date ("Y-m-d");?>' placeholder='Edad' value='<?php echo $PNA_FECHA_NACIMIENTO;?>' required>
                  
                </p>
                <p>
                  <input id='direccion_registro' name='PNA_DIRECCION' type=text placeholder='Direccion' maxlength='100' value='<?php echo $PNA_DIRECCION;?>'>
                </p>

                <p>
                  <input id='telefono_registro' name='PNA_TELEFONO' type=tel placeholder='Telefono' pattern="[0-9]{5,20}" maxlength='20' value='<?php echo $PNA_TELEFONO;?>'> 
                  
              </p></td>
            </tr>
            <tr>
              <td colspan="4" align="center"><fieldset id="tabla_redonda_azul">
                <legend>
                <span id="letra_azul_10">
                Cuenta
                </span> 
                </legend>
              <table width="85%" border="0" >
              <tr>
                <td colspan="2">
                </td>
              </tr>
              <tr id="bloque_usuario_admin_encargado">
                <td width="88%">
                  <p id='subtexto_documento_registro'>Nick :</p>
                  <p id='subtexto_documento_registro'>Contraseña :</p>
                  <p id='subtexto_documento_registro'>Repita Contraseña :</p>
                  </td>
                <td width="12%">
                  <p><input id='usuario_registro' name='PNA_USUARIO' type=text placeholder='Nick' maxlength='30'>
                    </p>
                  <!-- Input para la contraseña -->
                  <p><input id='password_registro' name='PNA_PASSWORD' type="password" placeholder='Contraseña' maxlength='30' value=''>
                    </p>
                  <!-- Solicitar repetir contraseña para confirmar integridad -->
                  <p><input name='PNA_PASSWORD_REPITE' type="password" id='password_repite_registro' value='' maxlength='30' placeholder='Repetir Contraseña'>
                    </p>
                  </td>
              </tr>

         	  </table></fieldset></td>
            </tr>
            <tr></tr>
            <tr>
              <td height="31" colspan="4" align="center">
			  
			  <input type="hidden" name="PNA_FOTO" value="<?php echo $PNA_FOTO;?>" />
			  <br>
			  <input type="submit" name="Submit2" id='boton-ingresar' value="Agregar" />
			  <br>
<br></td>
              </tr>
          </form>
      </table>
      </td>
    </tr>
  </table>
</div>			 
</body>
</html>
