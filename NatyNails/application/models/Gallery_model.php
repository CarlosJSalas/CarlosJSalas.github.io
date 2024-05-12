<?php
class Gallery_model extends CI_Model{
    protected $table = 'image';
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
    }
    
    public function get_list_posts(){ //done
        $this->db->select('*');    
		$this->db->from('image');
        $this->db->order_by('id', "asc");
        $this->db->limit(4);
		//$this->db->join($this->table, 'medico.id_utilizador = '.$this->table.'.id_utilizador');
	    //$this->db->where($this->table.'.admin', 3);
	    $query = $this->db->get();
        return $query->result();
    }
}