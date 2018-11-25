<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Bogota');
class model_cocina extends CI_Model
{
     function __construct()
     {
          parent::__construct();
     }

     //CONSULTA
     //Insertar comidas
     public function insertarCocina($recibir_datos){
        $this->db->insert('cocina',$recibir_datos);
       return $this->db->insert_id();
     }



     //mostrar servicio
     public function MostrarReservar(){
       $sql = "SELECT u.nombre,u.apellido,u.cedula,u.celular,h.cuarto,r.dias,h.precio,(r.dias*h.precio) as apagar FROM reservacion r, habitaciones h, usuario u where r.usuario=u.id and r.habitacion=h.id";
       $query = $this->db->query($sql);
       return $query->result();
     }


}
