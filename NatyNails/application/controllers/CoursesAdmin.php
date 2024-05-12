<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CoursesAdmin extends CI_Controller {
	
    public function __construct(){
        parent::__construct();
    }

	public function index(){

        $this->load->model('login_model');
        if($this->login_model->isLoggedIn()){
            $user = $this->session->user;
			if($this->login_model->checkadmin($user)){ //check if user session is an admin session.
                $this->load->view('backoffice/courses-admin');
            }else{
                redirect('noaccess');
                return;
            }
        }else{
            redirect('noaccess');
            return;
        }
		
        
	}
}

?>
