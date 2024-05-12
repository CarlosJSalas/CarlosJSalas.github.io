
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class QueryAdmin extends CI_Controller {
    
    private $data;
    public function __construct(){
        parent::__construct();
        
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('login_model');
        $this->load->model('queryAdmin_model');
    }

	public function index(){
        if($this->login_model->isLoggedIn()){
            $user = $this->session->user;
			if($this->login_model->checkadmin($user)){ //check if user session is an admin session.
                $data['lquery'] = $this->queryAdmin_model->get_list_query();
                $data['title'] = 'Product list';
                $this->load->view('backoffice/query-admin', $data);

            }else{
                redirect('noaccess');
                return;
            }
        }else{
            redirect('noaccess');
            return;
        }
	}
    
    public function create(){
        $data['title'] = 'Create Product';
		//$this->load->view('backoffice/adminheader',$this->data);
        $this->load->view('backoffice/query-admin',$data);
    }
    public function save(){
        $this->queryAdmin_model->create();
		redirect(base_url('queryadmin'));
    }  
    public function delete() {
        $id = $this->uri->segment(3);
        $user = $this->queryAdmin_model->delete($id);
        redirect(base_url('queryadmin'));
    } 
    public function edit(){
        $id = $this->uri->segment(3);
        $data = array();
        if(empty($id))
            show_404();
        else{
            $data['query'] = $this->queryAdmin_model->get_query_by_id($id);
            $this->load->view('backoffice/query-admin-edit',$data);
        }   
    }
    public function saveEdit(){
        $this->queryAdmin_model->update();
        redirect(base_url('queryadmin'));
    } 
}

?>
