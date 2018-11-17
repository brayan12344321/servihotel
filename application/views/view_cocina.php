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
      <div data-role="header" position="fixed">
        <div class="title"><a href="<?php echo base_url(); ?>servicio "><img src="<?php echo base_url(); ?>img/volver.png" alt="" style="float:left"></a><h1>¿Que deseas comer?</h1></div>
      </div>

    <div data-role="main">
        <center>
          <form  action="index.html" method="post" style="width:80%; margin-top:20px">
            <div class="select">
              <select class="" name="">
                <option value="">No</option>
                <option value="">Arroz chino</option>
                <option value="">arroz con pollo</option>
              </select>
              <select class="" name="">
                <option value="">No</option>
                <option value="">jugo natural</option>
                <option value="">gaseosa</option>
                <option value="">Vino</option>
                <option value="">cerveza</option>
              </select>
            </div>

          <div class="submit">
            <input type="submit" name="" value="Ordenar">
          </div>
          </form>
		</div>


  </body>
</html>
