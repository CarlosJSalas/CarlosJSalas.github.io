<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ClientPage extends CI_Controller {
	
    public function __construct(){
        parent::__construct();
        
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('login_model');
        $this->load->model('query_model');

        //$this->load->library(array('form_validation','session'));
    }

	public function index(){
        $this->load->view('clientpage');
	}
}

/*
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    private $data;
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('crud_model');
    }

    public function index(){
        $data['users'] = $this->crud_model->get_clients();
        $data['title'] = 'Users list';
        $this->load->view('crud/index',$data);
    }

    public function create(){
        $data['title'] = 'Create User';
        $this->load->view('crud/create',$data);
    }
    
    public function save(){
        $this->crud_model->create();
        redirect(base_url('crud/index'));
    }

    public function delete() {
        $id = $this->uri->segment(3);
        $user = $this->crud_model->delete($id);
        redirect(base_url('crud/index'));
    }

    public function edit(){
        $id = $this->uri->segment(3);
        $data = array();
        if(empty($id))
            show_404();
        else{
            $data['user'] = $this->crud_model->get_user_by_id($id);
            $this->load->view('crud/edit',$data);
        }   
    }

    public function saveEdit(){
        $this->crud_model->update();
        redirect(base_url('crud/index'));
    }
}

// controller Login
*/
?>
