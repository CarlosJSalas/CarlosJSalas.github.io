<?php
class Gallery_page_model extends CI_Model{
    protected $table = 'image';
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
    }
    
    public function get_list_posts(){ //done
        $this->db->select('*');    
		$this->db->from('image');
        $this->db->order_by('id', "desc");
	    $query = $this->db->get();
        return $query->result();
    }
}