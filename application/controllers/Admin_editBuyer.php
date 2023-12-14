<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_editBuyer extends CI_Controller {

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
		 $query = $this->Agro_model->getdatafromtable2('buyer', $comp);
		 $data['sqldata1']= $query;

		 $query2 = $this->Agro_model->getdatafromtable('bank_detials',$comp);
		 $data2['sqldata2']= $query2;

		$this->load->view('admin/header',$data);
		$this->load->view('admin/nav_bar',$data2);
		$this->load->view('admin/buyer_edit_detials');
		$this->load->view('admin/footer');
	}
}
