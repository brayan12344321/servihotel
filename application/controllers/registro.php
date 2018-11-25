<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registro extends CI_Controller {

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
		$this->load->view('view_registro');
	}

	public function insertarusuario(){
		$datos = array(
			'nombre' => $this->input->post('usuario'),
			'contrasena' => $this->input->post('contrasena'),
			'cedula' => $this->input->post('cedula')
		);
		$this->model_usuario->insertarU($datos);
		redirect('Welcome/',refresh);
	}

}
