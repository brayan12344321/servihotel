<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ServiHotel</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
    <script src="<?php echo base_url(); ?>jquery.mobile/jquery.js"></script>
    <script src="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.js"></script>
  
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
  <body>
		<div data-role="page" data-theme="a" >
      <div data-role="header" data-position="fixed">
        <div class="container">
          <img src="<?php echo base_url(); ?>img/logo2.png" alt=""><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>img/volver.png" style="float:right;margin-top:10px"></a>
        </div>
      </div>
    <div data-role="main">
      <div class="title"><h2 class="text-center mt-4">Servicio de Aseo.</h2></div>
      <!-- Servicios de aseo-->
      <div class="tipoAseo mt-4">
        <div class="aseo">
          <a href="<?php echo base_url(); ?>ServicioAseo"><h5 class="text-center">Ordenar</h5></a>
        </div>
        <div class="aseo">
          <a href="<?php echo base_url(); ?>limpieza"><h5 class="text-center" style="color:#fb797b;background-color: #fff; padding: 10px">Limpieza</h5></a>
        </div>
        <div class="aseo">
          <a href="<?php echo base_url(); ?>utencilios"><h5 class="text-center">Utencilios</h5></a>
        </div>
      </div>
      <center><div class="container">
        <h4 class="mt-5">Envianos tu solicitud:</h4>
        <form class="" action="<?php echo base_url(); ?>ServicioAseo/insertaraseo/<?php echo $this->session->userdata('ID');  ?>" data-ajax="false"  method="post">
          <div class="input">
            <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="input">
            <label for=""><h4 class="text-center"># habitacion:</h4></label>
            <input type="text" name="numero_habitacion" value="">
          </div>
          <div class="submit">
            <input type="submit" name="" value="Ordenar">
          </div>

      </div></center>

     