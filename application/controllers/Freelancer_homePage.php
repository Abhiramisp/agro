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


		if (!$this->session->has_userdata('username') || $this->session->userdata('auth') != "FREELANCER") {
			$datainserr = "Invalid Login Session";
			header('location: ' . base_url() . 'login/index_error/' . $datainserr);
			die;
		} else {
			$this->load->model('Agro_model');
			// $id = urldecode($this->uri->segment(3));

			$sess = array('sessi' => $this->session->userdata('username'));
			// echo $this->session->userdata('username');
			$active = array('freelancer_number' => $sess['sessi']);

			$query = $this->Agro_model->getdatafromtable('freelancer', $active);
			$data['sqldata1'] = $query;

			$sess = array('sessi' => $this->session->userdata('username'));

        $this->load->view('header',$data);
		$this->load->view("freelancer/nav");
		$this->load->view('model_search');
        $this->load->view('freelancer/hero');
        $this->load->view('freelancer/star_product');
        $this->load->view('freelancer/bestsaler_product');
        $this->load->view('Featurs1');
        $this->load->view('freelancer/Fruits');
        $this->load->view('Featurs');
        $this->load->view('freelancer/Vesitable');
        $this->load->view('banner');
        $this->load->view('freelancer/bestsaler_product');
        $this->load->view('fact');
        $this->load->view('tastimonial');
		$this->load->view('freelancer/logoutModel');
		$this->load->view('footer');
	}
}
}