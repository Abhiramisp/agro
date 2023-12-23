<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Farmer_loanApplication extends CI_Controller
{

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


		if (!$this->session->has_userdata('username') || $this->session->userdata('auth') != "FARMER") {
			$datainserr = "Invalid Login Session";
			header('location: ' . base_url() . 'login/index_error/' . $datainserr);
			die;
		} else {
			$this->load->model('Agro_model');
			// $id = urldecode($this->uri->segment(3));

			$sess = array('sessi' => $this->session->userdata('username'));

			$active = array('seller_id' => $sess['sessi']);

			$query = $this->Agro_model->getdatafromtable('sellers', $active);
			$data['sqldata1'] = $query;
			$sess = array('sessi' => $this->session->userdata('username'));



			$this->load->view('header', $sess);
			$this->load->view("farmers/nav");
			$this->load->view('farmers/loan_application', $data);
			$this->load->view('farmers/logoutModel');
			$this->load->view('footer');
		}
	}
}