<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    private $data;
	public function __construct(){
        parent::__construct();
        $this->load->helper(array('text','string','url'));
		/* Na vers�o >8.1 devemos antes dos m�todos open, read, write, close, destroy e gc no /system/libraries/Session/drivers/Session_files_driver.php
		   #[\ReturnTypeWillChange]
		public function open($save_path, $name){...}
		*/
		
        $this->load->library(array('form_validation','session'));
        $this->load->model('login_model');
    }

    public function index()
	{
		$this->load->model('login_model');
        if($this->login_model->isLoggedIn()){
			$user = $this->session->user;
			if($this->login_model->checkadmin($user)){
				redirect(base_url().'admin');
			}else if($this->login_model->checkClient($user)){
				redirect(base_url().'clientpage');
			}
        }else
			$this->load->view('login');
	}
    
	public function login()	{
	    //if($this->login_model->isLoggedIn()) { redirect('admin'); }
	    $this->form_validation->set_rules('username','user','required');
	    $this->form_validation->set_rules('password','senha','required');
	    
	    if($this->form_validation->run()){
	        $username = $this->input->post('username');
	        $password = $this->input->post('password');
	        if($user = $this->login_model->getByUsername($username)){
	            if($this->login_model->checkPassword($password,$user['password'])){
	                $this->login_model->createSession($user);
					if($this->login_model->checkadmin($user)){
	                	redirect(base_url().'admin');
					}else if($this->login_model->checkClient($user)){
	                	redirect(base_url().'homepage');
					}
					$this->logout();
	            }else
	                $this->data['login_error'] = 'Palavra-passe incorreta';
	        }else 
	            $this->data['login_error'] = 'User não exite';
	    }
	    redirect('Login');
	}	
	
	public function logout(){
	    //session_destroy();
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user');
		$this->session->sess_destroy();
	    $this->data['login_success'] = 'logout com sucesso!!!';
	    //$this->load->view('login',$this->data);
		redirect('homepage');
	}	
}// controller Login

