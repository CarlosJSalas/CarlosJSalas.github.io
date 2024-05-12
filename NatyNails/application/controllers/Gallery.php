<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	
	protected $table = 'image';
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
    }
    

	public function index(){
        $this->load->model('gallery_page_model');
		$data['lposts'] = $this->gallery_page_model->get_list_posts();
		$this->load->view('gallery', $data);
	}

	public function view($id_post){
        $this->load->model('view_model_post');
		$data['post_data'] = $this->view_model_post->get_post($id_post);
		$this->load->view('galleryview', $data);
	}
}
