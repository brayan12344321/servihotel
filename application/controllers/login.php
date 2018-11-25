
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
    {
         parent::__construct();
         $this->load->model('model_usuario');
    }

	public function index()
	{
		$this->load->view('view_login');
	}

	public function insertarusuario(){

	}

	public function iniciarsession()
	{
		$user = $this->input->post('nombre');
		$pass = $this->input->post('contrasena');

		$result = $this->model_usuario->consultuser($user,$pass);

		if(count($result) == 1){
			$session = array(
				'ID' => $result->id,
				'NOMBRE' => $result->nombre,
				'CEDULA' => $result->cedula,
				'ROL' => $result->rol,
				'IS_LOGGED_IN' => true,
			);

			$this->session->set_userdata($session);

			if($result->rol == 'administrador'){
				redirect("admin/");
			}else if ($result->rol == 'recepcion'){
				redirect("recepcion/");
			}else if($result->rol == 'cliente'){
				redirect("welcome/");
			}
		}else {
			echo "No esta registrado";
		}
	}

	//funcion de cerrar session
	public function cerrarsession(){
			$this->session->sess_destroy();
			redirect('Welcome/');
	}

}
