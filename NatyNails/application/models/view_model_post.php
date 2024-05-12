<?php
class View_model_post extends CI_Model{
    protected $table = 'image';
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
    }
    
    public function get_post($id_post){ //done
        $this->db->select('*');    
		$this->db->from('image');
	    $this->db->where($this->table.'.id', $id_post);
        $this->db->order_by('id', "asc");
	    $query = $this->db->get();
        return $query->result();
    }
}