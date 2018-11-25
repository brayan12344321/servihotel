<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cocina extends CI_Controller {

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
		$this->load->model('model_cocina');

	}

	public function index()
	{
		$this->load->view('view_Cocina');
	}

	public function insertarCocina($id){
		$recibir_datos = array(
			'usuario' => $id,
			'pedir' => $this->input->post('producto'),
			'num_habitacion' => $this->input->post('numero_habitacion'),
		);
		$this->model_cocina->insertarCocina($recibir_datos);
		redirect('cocina/',refresh);
	}

}
