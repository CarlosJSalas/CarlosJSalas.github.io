<?php
class Shop_model extends CI_Model{
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
        $this->db->limit(8);
		//$this->db->join($this->table, 'medico.id_utilizador = '.$this->table.'.id_utilizador');
	    //$this->db->where($this->table.'.admin', 3);
	    $query = $this->db->get();
        return $query->result();
    }
}