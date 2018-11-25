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
        <div class="title"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img/volver.png" alt="" style="float:left"></a><h1>Servicios Estandar</h1></div>
      </div>

    <div data-role="main"
      <!-- SERVICIOS-->
      <div class="Servicios2">
        <center><a href="<?php echo base_url(); ?>FormularioAseo" data-role="button" ><h2>Servicio de<br> aseo</h2></a>
        <a href="<?php echo base_url(); ?>cocina" data-role="button" ><h2>Servicios de <br>cocina</h2></a></center>
        <div class="group2">
          <center><a href="#confirmar" data-role="button"  data-rel="dialog"><h2>Soporte<br>tecnico</h2></a>
          <a href="<?php echo base_url(); ?>recepcion" data-role="button" ><h2>Servicio de<br>Reservas</h2></a></center>
        </div>

      </div>
    </div>
		</div>

    <div data-role="page" id="confirmar" >
      <div data-role="header">
        <h1> soporte tecnico</h1>
      </div>
      <div data-role="main">
        <div class="input">
          <input type="text" name="" value="" placeholder="Daño">
            <input type="text" name="" placeholder="Numero Habitacion" >
        </div>
      </div>
      <div data-role="footer">
        <a href="#" data-role="button">llamar</a>
        <a href="<?php  echo base_url();?>soporte" data-role="button">Cancelar</a>
      </div>

    </div>

  </body>
</html>
