<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {
	
	public function index()
	{
		$this->load->helper(array('url', 'text', 'string'));

        $this->load->model('shop_model');
        $this->load->model('gallery_model');
		
		$data['lproduct'] = $this->shop_model->get_list_products();
		$data['lposts'] = $this->gallery_model->get_list_posts();

		$this->load->view('index', $data);
	}
}
