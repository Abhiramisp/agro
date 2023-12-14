<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_farmerList extends CI_Controller
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
		$seller_id = urldecode($this->uri->segment(3));
	
		
		$active = array('seller_id'=>$seller_id);

		$query = $this->Agro_model->getdatafromtable('sellers',$active);
		$data['sqldata1'] = $query;

		$this->load->view('admin/header', $data);
		$this->load->view('admin/nav_bar');
		$this->load->view('admin/farmer_list');
		$this->load->view('admin/footer');
	}


	public function delete_seller(){
	
		$seller_id = urldecode($this->uri->segment(3));
		
		$this->load->model('Agro_model');
			
			$active = array('seller_id'=>$seller_id);
			
			$this->Agro_model->delete_data('sellers', $active);
			
			$this->load->helper('url');
			$this->load->library('session');
			
			header('location: '.base_url().'index.php/Admin_farmerList/index/');
		
	}	
}

