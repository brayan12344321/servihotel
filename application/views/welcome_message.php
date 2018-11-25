<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Pasabordo</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
    <script src="<?php echo base_url(); ?>jquery.mobile/jquery.js"></script>
    <script src="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.js"></script>
    

    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
  <body>
		<div data-role="page" data-theme="a">
      <div data-role="header" data-position="fixed">
        <div class="container">
          <img src="<?php echo base_url(); ?>img/logo2.png" alt="">
          <div class="login">
            <?php
              if($this->session->userdata('IS_LOGGED_IN') == true){
            ?>
            <a href="<?php echo base_url(); ?>login/cerrarsession" data-role="button" style="float:right;margin-top:-46px;background-color:#303030;"><h6>Cerrar sesion</h6></a>
            <?php
          }else{
            ?>
            <a href="<?php echo base_url(); ?>login" data-role="button" style="float:right;margin-top:-46px;background-color:#303030;"><h6>Inicia Sesion</h6></a>
            <?php
          }
            ?>

          </div>
        </div>
      </div>
    <div data-role="main">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url(); ?>img/Hotel3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url(); ?>img/Hotel5.jpg" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

      <!-- SERVICIOS-->
    <center><div class="Servicios">
      <?php
        if($this->session->userdata('IS_LOGGED_IN') == true){
      ?>
        <a data-ajax="false" href="<?php echo base_url();?>reserva" data-role="button" ><h5> Servicio de Reservas</h5></a>
        <a href="<?php echo base_url();?>ServicioAseo" data-role="button" ><h5>Servicio de Aseo</h5></a>
        <a href="<?php echo base_url();?>cocina" data-role="button" ><h5> Servicio de Cocina</h5></a>
      <?php
        }else{
      ?>
      <a  href="<?php echo base_url(); ?>login" data-role="button" ><h5> Servicio de Reservas</h5></a>
      <a  href="<?php echo base_url(); ?>login" data-role="button" ><h5> Servicio de Aseo</h5></a>
      <a  href="<?php echo base_url(); ?>login" data-role="button" ><h5> Servicio de Cocina</h5></a>
      <?php
        }
      ?>
      </div></center>
    </div>
		</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  </body>
</html>
