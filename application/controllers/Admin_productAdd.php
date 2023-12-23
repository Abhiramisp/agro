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
        $this->load->helper(array('captcha', 'url', 'form', 'file', 'html', 'date'));
        $this->load->library('fileupload');
        date_default_timezone_set("Asia/Kolkata");
        $this->load->model('Agro_model');

    }
    public function index()
    {
        if ($this->input->post('productname')) {
            $date = Date('Y-m-d');
            $this->load->library('fileupload');


            $p_name = $this->input->post('p_name');
            $p_categories = $this->input->post('p_categories');
            $p_s_cat = $this->input->post('p_subcat');
            $p_in_or = $this->input->post('p_in_or');
            $p_slife = $this->input->post('p_slife');
            $productid = $this->input->post('productid');
            $productimage = $this->input->post('image');

            $pic_array1 = self::upload_files('image');
            if (!count($pic_array1)) {
                $data['error'] = "Documents Upload Failed";
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
                // 'productid' => $productid
            );
            //print_r($data); die;
            $datainserr = "Data Inserted Successp_ully";
            $updatech = array();
            $status = $this->Agro_model->insert('product_list', $data, $updatech, $updatech);
            // header('location: ' . base_url() . 'index.php/Admin_productList');
            redirect('Admin_productList');

        }
    }
    private function upload_files($nameid)
    {
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'doc|docx|pdf|xlsx|jpg|png|gif|jpeg';
        $config['max_size'] = '50000000'; // max_size in kb

        $this->load->library('upload', $config);

        $files_uploaded = array();
        $countfiles = count($_FILES[$nameid]['name']);

        for ($i = 0; $i < $countfiles; $i++) {
            $_FILES['userfile']['name'] = $_FILES[$nameid]['name'][$i];
            $_FILES['userfile']['type'] = $_FILES[$nameid]['type'][$i];
            $_FILES['userfile']['tmp_name'] = $_FILES[$nameid]['tmp_name'][$i];
            $_FILES['userfile']['error'] = $_FILES[$nameid]['error'][$i];
            $_FILES['userfile']['size'] = $_FILES[$nameid]['size'][$i];

            if ($this->upload->do_upload('userfile')) {
                $uploadData = $this->upload->data();
                $files_uploaded[] = $uploadData['file_name'];
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                // Handle the error as needed
            }
        }

        return $files_uploaded;
    }
}
