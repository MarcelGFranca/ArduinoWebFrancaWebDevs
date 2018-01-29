<!DOCTYPE HTML>
<html>

<!-- PHP-->

	<!-- Autor - Marcel Garcia França -->

<!--
*  Arquivo PhpSerial.php modificado na linha 90, variável $device = "/dev/ttyACM" colocada no lugar de /dev/ttyS
-->
	<!-- HEAD -->

  <head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script> -->
    <link rel="stylesheet" href="css/style.css" type"text/css"/>
    
    <?php
      if(isset($_REQUEST['liga'])){
      // echo '<span style="padding: 20px" >Ligando Led</span>';
      }
      if(isset($_REQUEST['desliga'])){
      //  echo '<span style="padding: 20px" ""class="new_span">Desligando Led</span>';
      }
    ?>

    <title>Interface Arduino</title>
  </head>

<!-- BODY -->

  <body>

    <div class="container">
      <div class="top_bar">
      </div>

      <div class="cabecalho boxes" >
        <img class="logo" src="images/franca_web_devs_logo.jpeg"></img>
      </div>

      <div class="principal boxes">

        <div class="button_box col-lg-3 col-xs-12">
          
        <form action="porta_serial3.php" target="_self">
          <input class="btn3d btn btn-primary btn-lg" type="submit" name="Liga" value="Liga" />
        </form>   
        
        <form action="porta_serial1.php" target="_self">
          <input class="btn3d btn btn-success btn-lg" type="submit" name="Liga" value="Liga" />
        </form>   
        
        <form action="porta_serial2.php" target="_self">
          <input class="btn3d btn btn-danger btn-lg" type="submit" name="Liga" value="Liga" />
        </form>   

        </div>

        <div class="button_box col-lg-3 col-xs-12">
       
        <form action="porta_serial33.php">
          <input class="btn3d btn btn-primary btn-lg" type="submit" name="Desliga" value="Desliga" />
        </form> <!-- <button type="button" class="btn3d btn btn-primary btn-lg"><span class=""></span> Botão 2</button> -->

        <form action="porta_serial11.php">
          <input class="btn3d btn btn-success btn-lg" type="submit" name="Desliga" value="Desliga" />
        </form> <!-- <button type="button" class="btn3d btn btn-primary btn-lg"><span class=""></span> Botão 2</button> -->

        <form action="porta_serial22.php">
          <input class="btn3d btn btn-danger btn-lg" type="submit" name="Desliga" value="Desliga" />
        </form> <!-- <button type="button" class="btn3d btn btn-primary btn-lg"><span class=""></span> Botão 2</button> -->

        </div>

        <form action="porta_serial4.php">
          <input class="btn3d btn btn-primary btn-lg" type="submit" name="Música 1" value="Música 1" />
        </form>

        <form action="porta_serial5.php">
          <input class="btn3d btn btn-primary btn-lg" type="submit" name="Música 2" value="Música 2" />
        </form>
        
        <!--<div class="button_box col-lg-3 col-xs-12">
          <button type="button" class="btn3d btn btn-primary btn-lg"><span class=""></span> Botão 4</button>
        </div> -->

      </div>

<!-- FOOTER -->

      <div class="footer boxes">

       <!-- <div id="menuSocial">
          <a class="fa_icon" href="https://github.com/MarcelGFranca" target="_blank">
            <i class="social_icon fab fa-github" aria-hidden="true"></i>
          </a>
          <a class="fa_icon"  href="https://www.facebook.com/marcel.garcia.franca" target="_blank">
            <i class="social_icon fab fa-facebook" aria-hidden="true"></i>
          </a>
        </div>
      </div> -->    

    </div>

  </body>
</html> 
