<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JqueryMobile</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>JqueryMobile/jquery.mobile/estilos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
    <script src="<?php echo base_url(); ?>jquery.mobile/jquery.js"></script>
    <script src="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.js"></script>
    <!--themes-->
     <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>theme/themes/jquery.mobile.icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>theme/themes/themeRoller.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>theme/themes/themeRoller.min.css">
  </head>
  <body>
		<div data-role="page" data-theme="a">
      <div data-role="header" data-position="fixed">
        <div class="title"><h1>Room Service</h1></div>
      </div>

    <div data-role="main">
      <img src="<?php echo base_url(); ?>img/Hotel.jpg" width="100%">

      <!-- SERVICIOS-->
      <div class="Servicios">
        <center><a href="<?php echo base_url();?>Servicio" data-role="button" data-transition="flip"><h2>Servicio estandar</h2></a></center>
        <center><a href="" data-role="button" data-transition="flip"><h2>Servicios premiun</h2></a></center>
      </div>
    </div>
		</div>


  </body>
</html>
