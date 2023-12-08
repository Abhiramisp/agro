<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

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
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('model_search');
        $this->load->view('hero');
        $this->load->view('star_product');
        $this->load->view('bestsaler_product');
        $this->load->view('Featurs1');
        $this->load->view('Fruits');
        $this->load->view('Featurs');
        $this->load->view('Vesitable');
        $this->load->view('banner');
        $this->load->view('fact');
        $this->load->view('tastimonial');
		$this->load->view('recently_viewed');
		$this->load->view('footer');
	}
}
