<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Query extends CI_Controller {
	
    private $data;
    public function __construct(){
        parent::__construct();
        
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('login_model');
        $this->load->model('query_model');
    }

	public function index(){
		$data['lquery'] = $this->query_model->get_list_query();
		$this->load->view('query', $data);
	}

    public function save(){
		if($this->login_model->isLoggedIn()){
            $user = $this->session->user;
			if($this->login_model->checkclient($user) || $this->login_model->checkadmin($user)){
				$this->query_model->create();
				redirect(base_url('query'));
            }else{
                redirect('login');
                return;
            }
        }else{
            redirect('login');
            return;
        }
    }  
    public function delete() {
        $id = $this->uri->segment(3);
        $user = $this->userAdmin_model->delete($id);
        redirect(base_url('useradmin'));
    } 
    public function edit(){
        $id = $this->uri->segment(3);
        $data = array();
        if(empty($id))
            show_404();
        else{
            $data['user'] = $this->userAdmin_model->get_user_by_id($id);
            $this->load->view('backoffice/user-admin-edit',$data);
        }   
    }
    public function saveEdit(){
        $this->userAdmin_model->update();
        redirect(base_url('useradmin'));
    } 
}
