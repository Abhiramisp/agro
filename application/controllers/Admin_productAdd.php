<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_productAdd extends CI_Controller
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
    function __construct()
    {
        parent::__construct();
        // Load session library
        $this->load->library('session');
        // Load the captcha helper
        $this->load->helper('captcha');
        $this->load->library('fileupload');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->helper('html');
        $this->load->helper('date');
        date_default_timezone_set("Asia/Kolkata");
    }
    public function index()
    {
        if ($this->input->post('productname')) {
            $date = Date('Y-m-d');
            $this->load->library('fileupload');
            $this->load->helper(array('url', 'form', 'file', 'html'));
            $this->load->model('Agro_model');
            $this->load->library('session');


            $p_name = $this->input->post('p_name');
            $p_categories = $this->input->post('p_categories');
            $p_s_cat = $this->input->post('p_subcat');
            $p_in_or = $this->input->post('p_in_or');
            $p_slife = $this->input->post('p_slife');
            $productid = $this->input->post('productid');
            $productimage = $this->input->post('image');

            $_FILES['image']['name'];
            $pic_array1 = self::upload_files('image');




            if (!count($pic_array1)) {
                echo '<script language="javascript">';
                echo 'alert("Documents Upload Failed")';  //not showing an alert box.
                echo '</script>';
            } else {
                $pic_array1 = serialize($pic_array1);
            }



            $data = array(
                'product_category' => $p_categories,
                'product_type' => $p_in_or,
                'product_sub_category' => $p_s_cat,
                'product_name' => $p_name,
                'shelf_life' => $p_slife,
                'product_image' => $productimage,
                'productid' => $productid);
            //print_r($data); die;
            $datainserr = "Data Inserted Successp_ully";
            $updatech = array();
            $status = $this->Agro_model->insert('product_list', $data, $updatech, $updatech);
            header('location: ' . base_url() . 'index.php/Admin_productList');

        }



    }
    private function upload_files($nameid)
    {
        //print_r($nameid);
        //$countfiles = count($_FILES[$nameid]['name']);
        $countfiles = 1;
        // Looping all files
        for ($i = 0; $i < $countfiles; $i++) {
            if (!empty($_FILES[$nameid]['name'][$i])) {

                // Define new $_FILES array - $_FILES['file']
                $_FILES['file']['name'] = $_FILES[$nameid]['name'];
                $_FILES['file']['type'] = $_FILES[$nameid]['type'];
                $_FILES['file']['tmp_name'] = $_FILES[$nameid]['tmp_name'];
                $_FILES['file']['error'] = $_FILES[$nameid]['error'];
                $_FILES['file']['size'] = $_FILES[$nameid]['size'];

                // Set preference
                $config['upload_path'] = 'assets/uploads/';
                $config['allowed_types'] = 'doc|docx|pdf|xlsx|jpg|png|gif|jpeg';
                $config['max_size'] = '50000000'; // max_size in kb
                $config['file_name'] = $_FILES[$nameid]['name'][$i];

                //Load upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    // Initialize array
                    $datar[] = $filename;
                }
            }

        }
        return $datar;
    }










}
