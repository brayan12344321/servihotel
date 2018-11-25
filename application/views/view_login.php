<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ServiHotel/inicia/sesion</title>
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
          <img src="<?php echo base_url(); ?>img/logo2.png" alt=""><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>img/volver.png" style="float:right;margin-top:10px"></a>
        </div>
      </div>
    <div data-role="main">
      <div class="title"><h2 class="text-center mt-4">Iniciar sesion</h2></div>
      <!-- Formularios-->
      <center><form  action="<?php echo base_url(); ?>login/iniciarsession"  method="post" data-ajax="false">
        <div class="input">
          <label for=""><h4 class="text-center">Usuarios:</h4></label>
          <input type="text" name="nombre" value="">
        </div>
        <div class="input">
          <label for=""><h4 class="text-center">Contraseña:</h4></label>
          <input type="text" name="contrasena" value="">
        </div>
        <div class="submit">
          <input type="submit"  value="Ingresar" data-role="botton">
        </div>
        <div class="registro mt-3">
          <h5>Para poder acceder <a href="<?php echo base_url(); ?>registro">Registrate</a></h5>
        </div>
      </form></center>

     