<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reserva extends CI_Controller {

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
		 $this->load->model('model_reservacion');

	 }

	public function index()
	{
		$this->load->view('view_Reserva');
	}

	public function insertarReserva($id){
		$recibir_datos = array(
			'usuario' => $id,
			'desde' => $this->input->post('desde'),
			'hasta' => $this->input->post('hasta'),
		);
		$this->model_reservacion->insertarReservar($recibir_datos);
		redirect('reserva/',refresh);
	}


}
