<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_farmerAdd extends CI_Controller
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
		$fname = $this->input->post('fname');
		$fmobile = $this->input->post('fmobile');
		$fmail = $this->input->post('fmail');
		$flandarea = $this->input->post('fland');
		$fproduct = $this->input->post('fproduct');
		$fcapacity = $this->input->post('fcapacity');
		$fcity = $this->input->post('fcity');
		$fstate = $this->input->post('fstate');
		$ftaluk = $this->input->post('ftaluk');
		$fpassword = base64_encode($this->input->post('fpassword'));

		


		$data = array('seller_number' => $fmobile, 'seller_email' => $fmail, 'seller_supply_capacity' => $fcapacity,
			'seller_land_area' => $flandarea, 'seller_state' => $fstate, 'seller_product' => $fproduct,
			'seller_city' => $fcity, 'seller_name' => $fname, 'seller_password' => $fpassword, 'seller_taluk' => $ftaluk);
		//print_r($data); die;
		$datainserr = "Data Inserted Successfully";
		$status = $this->Agro_model->insert('sellers', $data);

		// bank 
		$seller_id = $this->db->insert_id();
		$bank_name = $this->input->post('bank_name');
		$branch_name = $this->input->post('branch_name');
		$AC_num = $this->input->post('AC_num');
		$ifsc = $this->input->post('ifsc');
		$upid = $this->input->post('upid');

		$data2 = array('bank_name' => $bank_name,
			'bank_branch' => $branch_name,
			'bank_ifsc' => $ifsc,
			'bank_ac_number' => $AC_num,
			'bank_upid' => $upid,
			'user_id' => $seller_id, 
			'user_type' => 'seller',
		);
		//print_r($data); die;
		$datainserr = "Data Inserted Successfully";
		$status = $this->Agro_model->insert('bank_detials', $data2);

		header('location: ' . base_url() . 'index.php/Admin_farmerList');




	}










}
