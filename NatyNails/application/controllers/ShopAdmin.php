<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ShopAdmin extends CI_Controller {
    
    private $data;
    public function __construct(){
        parent::__construct();
        
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('login_model');
        $this->load->model('shopAdmin_model');
    }

	public function index(){
        if($this->login_model->isLoggedIn()){
            $user = $this->session->user;
			if($this->login_model->checkadmin($user)){ //check if user session is an admin session.
                //$this->load->view('backoffice/shop-admin');
                // $data['lproduct'] = $this->shopAdmin_model->get_list_products($this->data['user']); // <!> user produts </!>
                $data['lproduct'] = $this->shopAdmin_model->get_list_products();
                $data['title'] = 'Product list';
                $this->load->view('backoffice/shop-admin',$data);

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
        $this->load->view('backoffice/shop-admin',$data);
    }
    public function save(){
        //$this->shopAdmin_model->create($this->data['user']);
        $this->shopAdmin_model->create();
		redirect(base_url('shopadmin'));
    }  
    public function delete() {
        $id = $this->uri->segment(3);
        $user = $this->shopAdmin_model->delete($id);
        redirect(base_url('shopadmin'));
    } 
    public function edit(){
        $id = $this->uri->segment(3);
        $data = array();
        if(empty($id))
            show_404();
        else{
            $data['product'] = $this->shopAdmin_model->get_product_by_id($id);
            $this->load->view('backoffice/shop-admin-edit',$data);
        }   
    }
    public function saveEdit(){
        $this->shopAdmin_model->update();
        redirect(base_url('shopadmin'));
    } 
}

?>
