<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Freelancer_homePage extends CI_Controller {

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
		$seller_id = urldecode($this->uri->segment(3));
	
		
		$active = array('seller_id'=>$seller_id);

		$query = $this->Agro_model->getdatafromtable('sellers',$active);
		$data['sqldata1'] = $query;

        $this->load->view('header',$data);
		$this->load->view("freelancer/nav");
		$this->load->view('freelancer/home_page');
		$this->load->view('freelancer/logoutModel');
		$this->load->view('footer');
	}
}
