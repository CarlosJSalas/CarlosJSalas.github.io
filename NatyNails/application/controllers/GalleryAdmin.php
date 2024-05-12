
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryAdmin extends CI_Controller {
    
    private $data;
    public function __construct(){
        parent::__construct();
        
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('login_model');
        $this->load->model('galleryAdmin_model');
    }

	public function index(){
        if($this->login_model->isLoggedIn()){
            $user = $this->session->user;
			if($this->login_model->checkadmin($user)){ //check if user session is an admin session.
                $data['lposts'] = $this->galleryAdmin_model->get_list_posts();
                $data['title'] = 'Product list';
                $this->load->view('backoffice/Gallery-admin', $data);

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
        $this->load->view('backoffice/gallery-admin',$data);
    }
    public function save(){
        $this->galleryAdmin_model->create();
		redirect(base_url('galleryadmin'));
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
