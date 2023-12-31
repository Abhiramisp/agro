<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_editFreelancer extends CI_Controller {

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
		$id = urldecode($this->uri->segment(3));
		
  
		 //$query = $this->Agro_model->getdatafromtable('sellers',);
		 $comp = array('id'=>$id);
		 $query = $this->Agro_model->getdatafromtable2('freelancer', $comp);
		 $data['sqldata1']= $query;

		 $query2 = $this->Agro_model->getdatafromtable('bank_detials');
		 $data2['sqldata2']= $query2;
	  
		// $primaryTable = 'freelancer';
		// $joinTable = 'bank_detials';
		// $commonColumn = 'id';
		// $userType = 'seller'; 

		// // Get joined data based on the condition
		// $data['sqldata1'] = $this->Agro_model->getJoinedDataWithCondition($primaryTable, $joinTable, $commonColumn, $userType, );

		$this->load->view('admin/header',$data);
		$this->load->view('admin/nav_bar',$data2);
		$this->load->view('admin/freelancer_edit_detials');
		$this->load->view('admin/footer');
	}
}
