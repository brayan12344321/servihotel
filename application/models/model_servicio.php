<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Bogota');
class model_servicio extends CI_Model
{
     function __construct()
     {
          parent::__construct();
     }

     //CONSULTA
     //Insertar comidas
     public function insertarServicio($recibir_datos){
        $this->db->insert('aseo',$recibir_datos);
       return $this->db->insert_id();
     }



     //mostrar servicio
     public function MostrarServicio(){
       $sql = "SELECT u.nombre,u.cedula,a.num_habitacion,a.mensaje  FROM aseo a, usuarios u where a.usuario=u.id ";
       $query = $this->db->query($sql);
       return $query->result();
     }


}
