<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ServiHotel/Reserva</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
    <script src="<?php echo base_url(); ?>jquery.mobile/jquery.js"></script>
    <script src="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.js"></script>
   
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
  <body background="img/fondo.PNG>
		<div data-role="page" data-theme="a">
      <div data-role="header" data-position="fixed">
        <div class="container">
          <img src="<?php echo base_url(); ?>img/logo2.png" alt=""><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>img/volver.png" style="float:right;margin-top:10px"></a>
        </div>
      </div>
    <div data-role="main">
      <div class="title"><h2 class="text-center mt-4">Haz tu reserva</h2></div>
      <!-- Formularios-->
      <center><form action="<?php echo base_url(); ?>reserva/insertarReserva/<?php echo $this->session->userdata('ID');  ?>" method="post" class="mt-3" data-ajax="false">
        <label for=""><h2 class="text-center">Desde:</h2></label>
        <input type="date" name="desde" value="">
        <label for=""><h2 class="text-center">Hasta:</h2></label>
        <input type="date" name="hasta" value="">
        <div class="submit">
          <input type="submit" name="" value="Reservar">
        </div>


        </select>
      </form></center>

     