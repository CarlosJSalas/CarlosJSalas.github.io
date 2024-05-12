
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    
    private $data;
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('login_model');
        $this->load->model('Register_model');
    }

    public function index(){
		$this->load->view('register');
	}
    /*
    public function create(){
        $data['title'] = 'NatyNails';
		//$this->load->view('backoffice/adminheader',$this->data);
        $this->load->view('backoffice/gallery-admin',$data);
    }
    */

    public function save(){
        $this->Register_model->create();
		redirect(base_url('login'));
    }  
    public function delete() {
        $id = $this->uri->segment(3);
        $user = $this->galleryAdmin_model->delete($id);
        redirect(base_url('galleryadmin'));
    } 
    public function edit(){
        $id = $this->uri->segment(3);
        $data = array();
        if(empty($id))
            show_404();
        else{
            $data['post'] = $this->galleryAdmin_model->get_product_by_id($id);
            $this->load->view('backoffice/gallery-admin-edit',$data);
        }   
    }
    public function saveEdit(){
        $this->galleryAdmin_model->update();
        redirect(base_url('galleryadmin'));
    } 
}

?>
