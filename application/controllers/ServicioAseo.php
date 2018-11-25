<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServicioAseo extends CI_Controller {

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
				 $this->load->model('model_servicio');
    }

	public function index()
	{
		$this->load->view('view_ServicioAseo');
	}

	public function insertarservicio($id){
		$recibir_datos = array(
			'usuario' => $id,
			'mensaje' => $this->input->post('mensaje'),
			'num_habitacion' => $this->input->post('numero_habitacion'),
		);
		$this->model_servicio->insertarservicio($recibir_datos);
		redirect('ServicioAseo/',refresh);
	}

}
