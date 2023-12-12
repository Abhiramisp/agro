<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fincial_support extends CI_Controller
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
        $purposeofmoney = $this->input->post('purposeofmoney');
		$returnperiod = $this->input->post('returnperiod');
		$amount = $this->input->post('amount');
		// $acceptcond =$this->input->post('acceptcond');
		// $fname = $this->input->post('fname');
		// $fmobile =$this->input->post('fmobile');



	
		
		$data = array('purpose_of_money' => $purposeofmoney, 'return_period' => $returnperiod, 
		'loan_amount' => $amount,);
//print_r($data); die;
		$datainserr = "Data Inserted Successfully";
		$status = $this->Agro_model->insert('financial_support',$data);
		header('location: '.base_url().'index.php/Farmer_loanApplication');
		
		
		


	}










}
