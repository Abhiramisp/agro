<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farmer_profile extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
			
		$this->load->model('Agro_model');
		$this->load->library('session');
	  
  
		 $query = $this->Agro_model->getdatafromtable('sellers',);
		 $data['sqldata1']= $query;

		 $query2 = $this->Agro_model->getdatafromtable('bank_detials',);
		 $data2['sqldata1']= $query2;
	  
        $this->load->view('header', $data, $data2);
		$this->load->view("farmers/nav");
		$this->load->view('farmers/profile');
		$this->load->view('farmers/logoutModel');
		$this->load->view('footer');
	}
}
