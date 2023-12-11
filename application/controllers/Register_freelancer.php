<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_freelancer extends CI_Controller
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('fileupload');
		$this->load->helper(array('url', 'form', 'file', 'html'));
		$this->load->model('Agro_model');
		$freelancer_name = $this->input->post('freelancer_name');
		$freelancer_mobile = $this->input->post('freelancer_number');
		$freelancer_mail = $this->input->post('freelancer_email');
		$freelancer_city = $this->input->post('freelancer_city');
		$freelancer_state = $this->input->post('freelancer_state');
		$freelancer_taluk = $this->input->post('freelancer_taluk');
		$freelancer_password = base64_encode($this->input->post('freelancer_password'));

		$data = array('freelancer_number' => $freelancer_mobile, 
		'freelancer_mail' => $freelancer_mail,
			'freelancer_state' => $freelancer_state,
			'freelancer_city' => $freelancer_city, 
			'freelancer_name' => $freelancer_name, 
			'freelancer_password' => $freelancer_password, 
			'freelancer_taluk' => $freelancer_taluk);
		//print_r($data); die;
		$datainserr = "Data Inserted Successfully";
		$status = $this->Agro_model->insert('freelancer', $data);
		header('location: ' . base_url() . 'index.php/login/');




	}










}
