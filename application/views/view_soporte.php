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
		<div data-role="page" data-theme="a">
      <div data-role="header" data-position="fixed">
        <div class="container">
          <img src="<?php echo base_url(); ?>img/logo2.png" alt=""><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>img/volver.png" style="float:right;margin-top:10px"></a>
        </div>
      </div>
    <div data-role="main">
      <div class="title"><h2 class="text-center mt-4">Soporte Tecnico</h2></div>
      <div class="container">
        <h5 class="text-center" style="font-family:qanela">Envienos tu queja para mejorar nuestras Habitaciones</h5>
      </div>
      <!-- Formularios-->
      <center><form class="mt-4" action="index.html" method="post">
        <div class="input">
          <label for=""><h4 class="text-left">Mensaje   :</h4></label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="input">
          <label for=""><h4 class="text-left">Numero de habitacion:</h4></label>
        <input type="text" name="" value="">
        </div>
        <div class="submit">
          <input type="submit" name="" value="Ingresar" data-role="botton">
        </div>
      </form></center>

      <style media="screen">
      form{
        width: 80%;
      }
      label h4{
        color: red;
        font-family:Akrobat-Light;
        color: #373434;
      }
        .title h2{
          color: #000;
          font-family: qanela;
          font-weight: bold;
        }
        .submit input{
          width: 100%;
          padding: 5px;
          font-size: 20px;
          margin-top: 5px;
          border:none;
          color: #fff;
          background-color: #373434;
          font-family: Akrobat-Light;
        }
        .registro h5{
          font-family: Akrobat-Light;
        }
      </style>
    </div>
		</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  </body>
</html>
<style media="screen">

@font-face{
  font-family: qanela;
  src:url(<?php echo base_url(); ?>fuentes/qanela.otf) ;
}
@font-face{
  src:url(<?php echo base_url(); ?>fuentes/Akrobat-Light.otf);
  font-family: Akrobat-Light;
 }

</style>
