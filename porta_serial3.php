<?php
// Exibir erros do PHP na tela
ini_set('display_erros', 1);

//Aqui Ã© curinthian
require("includes/php_serial.class.php");


$serial = new phpSerial();

$serial->deviceSet("/dev/ttyACM0"); 
/* Acima voce configura o seu dev de acordo com a porta COM emulada caso esteja
	usando uma maquina virtual com Linux, caso contrario Ã© sÃ³ setar a COM ou /dev/ttyS
	correspondente
*/ 

$serial->confBaudRate(9600);     //Taxa de transmissao
$serial->confParity("none");     //Paridade
$serial->confCharacterLength(8); //Comprimento

$serial->confStopBits(1);        //Bits de paragem
$serial->confFlowControl("none");//Controle

//$serial->deviceSet("/dev/ttyS2");
//Abrindo a conexao
//$serial->deviceOpen("r");
$serial->deviceOpen();


//Tempo para comunicar e o arduino estar pronto
sleep(2);

//Enviar 
$serial->sendMessage("i");

// Tempo de espera para recever dados da Serial
sleep(1);

//$serial->flush();

global $ler_serial;
$ler_serial = $serial->readPort();

//Fechando a conexao
$serial->deviceClose();

/*
	Autor da lib que importo para comunicar PHP com Serial
	RÃ©my Sanchez <thenux@gmail.com>
 */

/*	As demais implementações foram feitas por Cleiton Bueno
 *	http://www.cleitonbueno.wordpress.com
 *
 *	E-mail: cleitonrbueno@gmail.com
 *
 *	Utilize, modifique, comercialize mas mantenha os créditos!
 * */
?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type"text/css"/>

<div class="top_bar">

  <form action="index.php">
    <input class="btn3d btn btn-primary btn-lg back-button" type="submit" name="Voltar" value="Voltar" />
  </form>

</div>



