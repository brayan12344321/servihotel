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
  
  </head>
  <body>
		<div data-role="page" data-theme="a">
      <div data-role="header" position="fixed">
        <div class="title"><a href="<?php echo base_url(); ?>servicio "><img src="<?php echo base_url(); ?>img/volver.png" alt="" style="float:left"></a><h1>Recepción</h1></div>
      </div>

    <div data-role="main">
        <center>
          <form  action="index.html" method="post" style="width:80%; margin-top:20px">
            <div class="select">
              <select class="" name="">
                <option value="">Precios</option>
                <option value="">20.000</option>
                <option value="">30.000</option>
                <option value="">35.000</option>
                <option value="">40.000</option>
              </select>
            </div>
            <div class="input">
                <input type="text" name="" placeholder="Identificacion" >
            </div>

          <div class="submit">
            <input type="submit" name="" value="Ordenar">
          </div>
          </form>
		</div>


  </body>
</html>
