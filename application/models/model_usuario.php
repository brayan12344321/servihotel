<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Bogota');
class model_usuario extends CI_Model
{
     function __construct()
     {
          parent::__construct();
     }

     //insertar
     public function insertarU($datos){
        $this->db->insert('usuarios',$datos);
       return $this->db->insert_id();
     }

     //validacion usuario
     public function consultuser($user,$pass){
       $sql = "SELECT * FROM usuarios WHERE nombre='$user' AND contrasena='$pass'";
       $query = $this->db->query($sql);
       return $query->row();
     }



}
