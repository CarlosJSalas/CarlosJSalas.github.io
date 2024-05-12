<?php
class View_model_product extends CI_Model{
    protected $table = 'products';
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
    }
    
    public function get_product($id_product){ //done
        $this->db->select('*');    
		$this->db->from('products');
	    $this->db->where($this->table.'.id', $id_product);
        $this->db->order_by('id', "asc");
	    $query = $this->db->get();
        return $query->result();
    }
}