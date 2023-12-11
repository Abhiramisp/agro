<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_transporter extends CI_Controller {

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
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('Agro_model');
		$t_name = $this->input->post('t_name');
		$t_mobile = $this->input->post('t_mobile');
		$t_mail = $this->input->post('t_mail');
		$vehicle_type  = $this->input->post('vehicle_type');
		$vehicle_number = $this->input->post('vehicle_number');
		$t_city = $this->input->post('t_city');
		$t_state = $this->input->post('t_state');
		$t_taluk = $this->input->post('t_taluk');
		$t_password  = base64_encode($this->input->post('t_password'));
		
		
		
		
		$data = array('t_number' => $t_mobile, 't_email' => $t_mail, 
		'vehicle_type' => $vehicle_type,'t_state' => $t_state ,'vehicle_number' => $vehicle_number,
		't_city' => $t_city,'t_name'=>$t_name,'t_password'=>$t_password,'t_taluk'=>$t_taluk);
//print_r($data); die;
		$datainserr = "Data Inserted Successfully";
		$status = $this->Agro_model->insert('transport', $data);
		header('location: '.base_url().'index.php/login/');
		
		
		
		
	}
	
	
	
	
	
	

    
		
	
}
