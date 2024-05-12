<?php
class Shop_page_model extends CI_Model{
    protected $table = 'products';
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
    }
    
    public function get_list_products(){ //done
        $this->db->select('*');    
		$this->db->from('products');
        $this->db->order_by('id', "desc");
	    $query = $this->db->get();
        return $query->result();
    }
}