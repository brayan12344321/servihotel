<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Bogota');
class model_reservacion extends CI_Model
{
     function __construct()
     {
          parent::__construct();
     }

     //CONSULTA
     //Insertar comidas
     public function insertarReservar($recibir_datos){
        $this->db->insert('reservacion',$recibir_datos);
       return $this->db->insert_id();
     }



     //mostrar servicio
     public function MostrarReservar(){
       $sql = "SELECT u.nombre,u.cedula,r.desde,r.hasta  FROM reservacion r, usuarios u where r.usuario=u.id ";
       $query = $this->db->query($sql);
       return $query->result();
     }


}
