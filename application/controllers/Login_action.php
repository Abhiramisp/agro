<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_action extends CI_Controller {

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
		
		$this->load->helper('url');
		$this->load->library('session');
		$this->session->sess_expiration = '3600';
		if($this->input->post('user')){
			if($this->input->post('optradio')== "farmer"){
				$table = "sellers";
				$colname = "seller_number";
				$colname2 = "seller_password";
			     
		}else if($this->input->post('optradio')=="freelancer"){
				$table = "freelancer";
				$colname = "freelancer_number";
				$colname2 = "freelancer_password";
	 }else if($this->input->post('optradio')=="transport"){
				$table = "transport";
				$colname = "t_number";
				$colname2 = "t_password";
				
			}else{
				$table = "buyerregisteration";
				$colname = "b_number";
				$colname2 = "b_password";
				
			  }
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			$pass = base64_encode($pass);
			
			$check_db = array($colname => $user, $colname2 => $pass);
			$this->load->model('Agro_model');
			$productid= $this->uri->segment(3);
			  if($this->Agro_model->check($table, $check_db)){
				  if($table == "farmer"){
					  $newdata = array('username'=>$user,'auth'=>'FARMER','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					  header('location: '.base_url().'index.php/Farmer_Register');
					  die;
				 
				  }else if($table == "freelancer"){
					  $newdata = array('username'=>$user,'auth'=>'AGENT','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					  header('location: '.base_url().'index.php/Freelancer_Register');
					  die;
					  
					 }else if($table == "tranport"){
					  $newdata = array('username'=>$user,'auth'=>'TRANSPORT','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					  header('location: '.base_url().'index.php/Transport_Register');
					  die; 
					  
					  
				  }else if($table == "buyer"){
					  $newdata = array('username'=>$user,'auth'=>'BUYER','logged_in' => TRUE);
						$this->session->set_userdata($newdata);
					 header('location: '.base_url().'index.php/Buyer_Register');
					 die; 
				  }
			  }else{
				  $datainserr = "Invalid Password";
				  header('location: '.base_url().'#'. $datainserr);
				  die;
			  }
			  die;
		}else{
			//$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
		}
		
		
	}
	public function index_error(){
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo 'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo '</script>';
			//$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
			
	}
	
}
