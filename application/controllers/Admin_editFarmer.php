<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_editFarmer extends CI_Controller {

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
		$user_id = urldecode($this->uri->segment(3));

		$primaryTable = 'sellers';
		$joinTable = 'bank_detials';
		$commonColumn = $user_id;
		$userType = 'seller'; 
		$comp = $seller_id;

		// $comp = array('seller_id'=>$seller_id);
		// Get joined data based on the condition
		$data['sqldata1'] = $this->Agro_model->getJoinedDataWithCondition($primaryTable, $joinTable, $commonColumn, $userType, $comp);
  
		$this->load->view('admin/header',$data);
		$this->load->view('admin/nav_bar');
		$this->load->view('admin/farmer_edit_detials');
		$this->load->view('admin/footer');
	}
}

