<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_buyer extends CI_Controller
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
		$b_name = $this->input->post('b_name');
		$b_mobile = $this->input->post('b_number');
		$b_mail = $this->input->post('b_email');
		$b_state = $this->input->post('b_state');
		$b_city = $this->input->post('b_city');
		$b_taluk = $this->input->post('b_taluk');
		$b_shipping_loc = $this->input->post('b_shipping_loc');
		$b_company_name = $this->input->post('b_company_name');
		$b_comloc = $this->input->post('b_comloc');
		$b_gstnum = $this->input->post('b_gstnum');
		$b_password = base64_encode($this->input->post('b_password'));




		$data = array('b_number' => $b_mobile, 'b_email' => $b_mail,
			'b_shipping_loc' => $b_shipping_loc, 'b_state' => $b_state, 'b_company_name' => $b_company_name,
			'b_company_loc' => $b_comloc, 'b_gst_number' => $b_gstnum,
			'b_company_name' => $b_city, 'b_name' => $b_name, 'b_password' => $b_password, 'b_taluk' => $b_taluk);
		//print_r($data); die;
		$datainserr = "Data Inserted Successfully";
		$status = $this->Agro_model->insert('buyer', $data);
		header('location: ' . base_url() . 'index.php/login/');




	}










}
