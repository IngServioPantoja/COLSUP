<?php 
if (!empty($_POST['usuario'])){$usuario=$_POST['usuario'];}else{$usuario="";}
if (!empty($_POST['password'])){$password=$_POST['password'];}else{$password="";}
?>

<!DOCTYPE html>
<html lang="es" class="html_100">
<head>
<meta charset='utf-8'>
<link rel="stylesheet" href="hojadeestilos.css">
<link rel="stylesheet" href="css/nav.css">
<title>COLSUP pagina principal</title>
<style type="text/css">
#tabla_index_1 {
	text-align: left;
}
</style>
</head>
<script src='http://code.jquery.com/jquery-1.7.2.min.js'></script>
<script src="http://code.jquery.com/jquery-1.5.js"></script>
<script src="js/jquery.js"></script>
<script src="js/modernizr.js"></script>

<script type="text/javascript">
$(document).ready(function(){
window.onload = document.getElementById("oculto_p_tecnicos").style.display="none";
window.onload = document.getElementById("oculto_p_academicos").style.display="none";
window.onload = document.getElementById("oculto_c_espesificos").style.display="none";
window.onload = document.getElementById("oculto_diplomados").style.display="none";
window.onload = document.getElementById("oculto_c_aplicativos").style.display="none";
window.onload = document.getElementById("oculto_b_ciclos").style.display="none";
window.onload = document.getElementById("oculto_r_horarios").style.display="none";
});

function incorrecto()
{
alert("Usuario Y/O Contraseña Incorrectos");	
}
</script>
<body id='bodyindex'>
<table align="center" class="tabla_2_x_2" id="tabla_index_1">
<tr>
<td width="24%"><img id="imagenlogomini"></td>
<td height="6%" colspan="2">
   	    
        <img id="imagenlogo"></td>
  </tr>
    <tr style="text-align: center">
      <td height="5%" colspan="7" align="left" style="text-align: center" id="tr_inset">
      <nav id="topNav">
      	  <ul>
          <li>
          <a href="panel.php" id="titulo_selector_plan">&nbsp;&nbsp;Inicio&nbsp;&nbsp;</a>
          </li>
       	  </ul>
	    </nav>
          <nav id="topNav2">
          <ul>
          <li>
          <a href="quienes_somos.html" target="internal" id="titulo_selector_plan">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quienes Somos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
   		  <ul>
          <li>
          <a href='quienes_somos.html' target='internal' name='memunav'>&nbsp;Insignias Institucionales&nbsp;</a>
 		  </li>
          <li>
          <a href='uniformes.html' target='internal' name='memunav'>&nbsp;Nuestros Uniformes&nbsp;</a>
 		  </li>
          <li>
          <a href='mapa.html' target='internal' name='memunav'>&nbsp;Nuestra Ubicación Geográfica&nbsp;</a>
 		  </li>
          <li>
          <a href='organigrama.html' target='internal' name='memunav'>&nbsp;Organigrama&nbsp;</a>
 		  </li>
          <li>
          <a href='historia.html' target='internal' name='memunav'>&nbsp;Reseña Histórica&nbsp;</a>
 		  </li>
          </ul>        
          </li>
       	  </ul>
  		  </nav>
      <nav id="topNav">
      	  <ul>
          <li>
          <a href="imagenes.html" id="titulo_selector_plan" target="internal">Imagenes</a>
          </li>
       	  </ul>
	    </nav>

      <nav id="topNav">
      	  <ul>
          <li>
          <a href="empleo.html" target="internal" id="titulo_selector_plan">Empleo</a>
          </li>
       	  </ul>
	    </nav>
        <nav id="topNav3">
          <ul>
          <li>
          <a href="estudiantes.html" target="internal" id="titulo_selector_plan">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Estudiantes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        
          </li>
       	  </ul>
	    </nav>
        
               <nav id="topNav3">
          <ul>
          <li>
          <a href="index.html" target="_parent" id="titulo_selector_plan">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        
          </li>
       	  </ul>
	    </nav>
      </td>
  </tr>
    <tr>
      <td width="24%" valign="top" >
      
      <table width="100%" border="0" align="left" id="tabla_modalidades" class="borde">
	<tr>
		<td height="49" align="center" id="td_modalidades">
        	<span id="modalidades">
            	&nbsp;Modalidades de Estudio
            </span> 
        </td>
	</tr>
    <tr>
	    <td>
        <table width="100%" border="0" id="td_p_tecnicos">
 			<tr>
        		<td class="td_programas">
                	<span>
                    	Programas Tecnicos
                    </span>
                </td>
        	</tr>
        	<tr>
            	<td id="oculto_p_tecnicos">
          			<a href="index.html" id="link_modalidades">
                    	T. LABORAL EN APOYO INTEGRAL
                    </a>
                    </br>
          			<a href="index.html" id="link_modalidades">
                    T. LABORAL EN SISTEMAS
                    </a>
          		</td>
       	    </tr>
        </table>
       <!-- Tabla de programs academicos -->
       <table width="100%" border="0" id="td_p_academicos">
	 		<tr>
				<td class="td_programas">
          			<span>
                    	Programas Academicos
                    </span>
          		</td>
        	</tr>
       		<tr>
<td id="oculto_p_academicos">
          <a href="index.html" id="link_modalidades">T. L. EN ADMINISTRACIÓN DE EMPRESAS Y MERCADEO</a></br>
          <a href="index.html" id="link_modalidades">T.L. EN ELECTRICIDAD Y ELECTRÓNICA</a>
          </td>
        </tr>
        </table>
       
       <!-- Tabla de cursos epesificos -->
       <table width="100%" border="0" id="td_c_espesificos">
 		<tr>
          <td class="td_programas">
          <span>Cursos Espesificos</span>
          </td>
        </tr>
        <tr>
          <td id="oculto_c_espesificos">
          <a href="index.html" id="link_modalidades">ADMINISTRACION</a></br>
          <a href="index.html" id="link_modalidades">ASISTENTE DE VENTAS EN FARMACIA</a></br>
          <a href="index.html" id="link_modalidades">CRIMINALISTICA</a></br>
          <a href="index.html" id="link_modalidades">DISEÑO GRAFICO</a></br>
          <a href="index.html" id="link_modalidades">ELECTRICIDAD</a></br>
          <a href="index.html" id="link_modalidades">IDIOMA EXTRANGERO - INGLES</a></br>
          <a href="index.html" id="link_modalidades">PELUQUERIA</a></br>
          <a href="index.html" id="link_modalidades">SECRETARIADO</a></br>
          <a href="index.html" id="link_modalidades">SISTEMAS</a>
          </td>
        </tr>
        </table>     
       
       
       
       <!-- Tabla de cursos epesificos -->
       <table width="100%" border="0" id="td_diplomados">
 		<tr>
          <td class="td_programas">
          <span>Diplomados</span>
          </td>
        </tr>
        <tr>
          <td id="oculto_diplomados">
          <a href="index.html" id="link_modalidades">CONTABILIDAD SISTEMATIZADA</a></br>
          <a href="index.html" id="link_modalidades">MECÁNICA AUTOMOTRIZ</a></br>
          <a href="index.html" id="link_modalidades">MECÁNICA DE MOTOS</a></br>
          <a href="index.html" id="link_modalidades">MERCADEO Y VENTAS</a></br>
          <a href="index.html" id="link_modalidades">SISTEMA PENAL ACUSATORIO</a></br>
          <a href="index.html" id="link_modalidades">TENDENCIAS CORTES CABELLO</a></br>
          <a href="index.html" id="link_modalidades">VISITADOR MÉDICO</a></br>
          </td>
        </tr>
        </table>     
       
       
         <!-- Tabla de cursos aplicativos -->
       <table width="100%" border="0" id="td_c_aplicativos">
 		<tr>
          <td class="td_programas">
          <span>Cursos Aplicativos</span>
          </td>
        </tr>
        <tr>
          <td id="oculto_c_aplicativos">
          <a href="index.html" id="link_modalidades">ADMINISTRACION</a></br>
          <a href="index.html" id="link_modalidades">ASISTENTE DE VENTAS EN FARMACIA</a></br>
          <a href="index.html" id="link_modalidades">CRIMINALISTICA</a></br>
          <a href="index.html" id="link_modalidades">DISEÑO GRAFICO</a></br>
          <a href="index.html" id="link_modalidades">ELECTRICIDAD</a></br>
          <a href="index.html" id="link_modalidades">IDIOMA EXTRANGERO - INGLES</a></br>
          <a href="index.html" id="link_modalidades">PELUQUERIA</a></br>
          <a href="index.html" id="link_modalidades">SECRETARIADO</a></br>
          <a href="index.html" id="link_modalidades">SISTEMAS</a>
          </td>
        </tr>
        </table>       
 <!-- para lo ciclos -->      
        <table width="100%" border="0" id="td_b_ciclos">
 		<tr>
          <td class="td_programas">
          <span>Bachillerato Por Ciclos</span>
          </td>
        </tr>
        <tr>
          <td id="oculto_b_ciclos">
          <a href="index.html" id="link_modalidades">ADMINISTRACION</a></br>
          <a href="index.html" id="link_modalidades">ASISTENTE DE VENTAS EN FARMACIA</a></br>
          <a href="index.html" id="link_modalidades">CRIMINALISTICA</a></br>
          <a href="index.html" id="link_modalidades">DISEÑO GRAFICO</a></br>
          <a href="index.html" id="link_modalidades">ELECTRICIDAD</a></br>
          <a href="index.html" id="link_modalidades">IDIOMA EXTRANGERO - INGLES</a></br>
          <a href="index.html" id="link_modalidades">PELUQUERIA</a></br>
          <a href="index.html" id="link_modalidades">SECRETARIADO</a></br>
          <a href="index.html" id="link_modalidades">SISTEMAS</a>
          </td>
        </tr>
        </table>     
   
      
  <!-- para lo ciclos -->      
        <table width="100%" border="0" id="td_r_horarios">
 		<tr>
          <td class="td_programas">
          <span>Requisitos Y Horarios</span>
          </td>
        </tr>
        <tr>
          <td id="oculto_r_horarios">
          <a href="index.html" id="link_modalidades">ADMINISTRACION</a></br>
          <a href="index.html" id="link_modalidades">ASISTENTE DE VENTAS EN FARMACIA</a></br>
          <a href="index.html" id="link_modalidades">CRIMINALISTICA</a></br>
          <a href="index.html" id="link_modalidades">DISEÑO GRAFICO</a></br>
          <a href="index.html" id="link_modalidades">ELECTRICIDAD</a></br>
          <a href="index.html" id="link_modalidades">IDIOMA EXTRANGERO - INGLES</a></br>
          <a href="index.html" id="link_modalidades">PELUQUERIA</a></br>
          <a href="index.html" id="link_modalidades">SECRETARIADO</a></br>
          <a href="index.html" id="link_modalidades">SISTEMAS</a>
          </td>
        </tr>
    	</table>
        </td>
	</tr>
</table>
   
   
   
   <table width="100%" border="0">
    <tr>
      		<td height="49" align="center" id="td_modalidades">
        	<span id="modalidades">
            	&nbsp;Videos Colsup
            </span> 
        </td>
      </tr>
    <tr>
      <td>
      <iframe width="100%" height="150px" src="http://www.youtube.com/embed/l_YOLKHPZcI" frameborder="0" allowfullscreen></iframe>
      </td>
      </tr>
</table>

      
      
      
      
      
      
      
      
      
      </td>
      <td width="64%">
 
      			<div id='textoPr'>
        		<iframe name='internal' src="bienvenidos.html" id='internal'>
                </iframe>
        		</div>
</td>
    	<td width="12%" valign="top"><table width="100%" border="0" align="center">
    <tr>
      <td>
      <a href="http://www.colsup.edu.co/index.php?option=com_content&view=category&id=38&Itemid=69" target="_blank"><img src="IMAGENES/logocolsupmini2.png" width="100%" height="120" id="imagen_hover"></a>
      </td>
    </tr>
    <tr>
      <td><a href="http://www.facebook.com/pages/Instituto-Colsup-Pasto/212931692093333" target="_blank"><img src="IMAGENES/facebookicon.png" width="100%" height="120" id="imagen_hover"></a></td>
      </tr>
    <tr>
      <td height="49" id="td_modalidades2">
      <a href="" target="_blank"><img src="IMAGENES/twitericon.png" width="100%" height="120" id="imagen_hover"></a>
      </td>
    </tr>
   
    <tr>
      <td >
      

      </td>
    </tr>
  </table></td>
  </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
</table>
</body>
<script>
						(function($){
				var nav = $("#topNav2");
				nav.find("li").each(function() {
					if ($(this).find("ul").length > 0) {
						$("<span>").text("^").appendTo($(this).children(":first"));
						$(this).mouseenter(function() {
							$(this).find("ul").stop(true, true).slideDown();
						});
						$(this).mouseleave(function() {
							$(this).find("ul").stop(true, true).slideUp();
						});
					}
				});
			})(jQuery);
			
			(function($){
				var nav = $("#topNav3");
				nav.find("li").each(function() {
					if ($(this).find("ul").length > 0) {
						$("<span>").text("^").appendTo($(this).children(":first"));
						$(this).mouseenter(function() {
							$(this).find("ul").stop(true, true).slideDown();
						});
						$(this).mouseleave(function() {
							$(this).find("ul").stop(true, true).slideUp();
						});
					}
				});
			})(jQuery);
			
$('#td_p_tecnicos').mouseenter(function()
{$('#oculto_p_tecnicos').fadeIn('slow');
}).mouseleave(function()
{$('#oculto_p_tecnicos').fadeOut('slow');
});

$('#td_p_academicos').mouseenter(function()
{$('#oculto_p_academicos').fadeIn('slow');
}).mouseleave(function()
{$('#oculto_p_academicos').fadeOut('slow');
});

$('#td_c_espesificos').mouseenter(function()
{$('#oculto_c_espesificos').fadeIn('slow');
}).mouseleave(function()
{$('#oculto_c_espesificos').fadeOut('slow');
});

$('#td_diplomados').mouseenter(function()
{$('#oculto_diplomados').fadeIn('slow');
}).mouseleave(function()
{$('#oculto_diplomados').fadeOut('slow');
});

$('#td_c_aplicativos').mouseenter(function()
{$('#oculto_c_aplicativos').fadeIn('slow');
}).mouseleave(function()
{$('#oculto_c_aplicativos').fadeOut('slow');
});

$('#td_b_ciclos').mouseenter(function()
{$('#oculto_b_ciclos').fadeIn('slow');
}).mouseleave(function()
{$('#oculto_b_ciclos').fadeOut('slow');
});

$('#td_r_horarios').mouseenter(function()
{$('#oculto_r_horarios').fadeIn('slow');
}).mouseleave(function()
{$('#oculto_r_horarios').fadeOut('slow');
});


		</script>
</html>
