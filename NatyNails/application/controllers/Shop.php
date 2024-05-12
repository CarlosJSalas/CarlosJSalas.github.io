<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
	
	protected $table = 'products';
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
    }
    

	public function index()
	{
		$this->load->helper(array('url', 'text', 'string'));
        $this->load->model('shop_page_model');
		$data['lproduct'] = $this->shop_page_model->get_list_products();
		$this->load->view('shop', $data);
	}

	public function view($id_product){
        $this->load->model('view_model_product');
		$data['product_data'] = $this->view_model_product->get_product($id_product);
		$this->load->view('shopview', $data);
	}
}
