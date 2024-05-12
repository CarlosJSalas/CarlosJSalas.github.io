<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserAdmin extends CI_Controller {
    
    private $data;
    public function __construct(){
        parent::__construct();
        
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('login_model');
        $this->load->model('userAdmin_model');
    }

	public function index(){
        if($this->login_model->isLoggedIn()){
            $user = $this->session->user;
			if($this->login_model->checkadmin($user)){ //check if user session is an admin session.
                $data['lusers'] = $this->userAdmin_model->get_list_users();
                $data['title'] = 'Users list';
                $this->load->view('backoffice/user-admin',$data);

            }else{
                redirect('noaccess');
                return;
            }
        }else{
            redirect('noaccess');
            return;
        }
	}
    
    public function save(){
        $this->userAdmin_model->create();
		redirect(base_url('useradmin'));
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

?>
