<html>

<!--
	Este � um trabalho desenvolvido por Cleiton Bueno.
	http://www.cleitonbueno.wordpress.com

	E-mail: cleitonrbueno@gmail.com

	Utilize, modifique, comercialize mas mantenha os cr�ditos!
-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<meta name="description" content="Pagina Web Temp com Arduino de Cleiton Bueno" />	
	<link rel="stylesheet" href="css/estilo.css">
	<title>Arduino Web Temp 1.0</title>
</head>
<body>
	<center><h1>Arduino WebTemp 2013 - Cleiton Bueno</h1></center>
		<br><br>
	<center>
	<fieldset id="box_temp">
		<legend><b>Arduino Temperatura</b></legend>	

	
		<?php
			// Importando arquivo que realizar configuração e consulta da porta serial
			require("porta_serial.php");
		
			// Habilitando erros do PHP no navegador
			//ini_set('display_erros', 1);
		
		
			$temperatura = trim($ler_serial);

			if ($temperatura < 22){
					echo "<br>";
					echo "<center><b>Temperatura atual:</b><b id=\"temp_frio\"> ".$temperatura." ºC</b></center>";
			}
			elseif(($temperatura >= 22) && ($temperatura < 26)) {
					echo "<br>";
					echo "<center><b>Temperatura atual:</b><b id=\"temp_normal\"> ".$temperatura." ºC</b></center>";
			}
			elseif($temperatura >= 26) {
					echo "<br>";
					echo "<center><b>Temperatura atual:</b><b id=\"temp_quente\"> ".$temperatura." ºC</b></center>";
			}		
		?>
		<br>
		<center><img src="images/frio_quente.png" width="125" height="125"></center>
		
		<p id="temp_frio">22.22ºC</p><pre id="temp_desc">Temperatura abaixo de 22ºC, classificamos como frio</pre>
		<p id="temp_normal">22.22ºC</p><pre id="temp_desc"> Temperatura entre 22ºC e 26ºC, classificamos como normal</pre>
		<p id="temp_quente">22.22ºC</p><pre id="temp_desc"> Temperatura acima de 26ºC, classificamos como quente</pre>
	</fieldset>
	</center>
	
	<br ><br >
	<center><label><b>Tecnologias utilizadas</b></label></center><br>
	<center><img src="images/arduino_logo.png" alt="Arduino" title="Arduino para aquisição da temperatura." > &nbsp; &nbsp;
	<img src="images/linux_gnu.png" alt="Linux Ubuntu 11.10 LTS" width="100" height="125" title="Linux como plataforma web e tratamento dos dados com PHP." ></center>
	
	<center><p id="rodape">Desenvolvido por <a href="http://www.cleitonbueno.wordpress.com"><i>Cleiton Bueno</i></a></p></center>

</body>


</html>


