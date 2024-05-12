<?php
class Query_model extends CI_Model{
    protected $table = 'query';
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('login_model');
    }
    
    public function get_list_query(){ //done
        $this->db->select('*');    
		$this->db->from('query');
		//$this->db->join($this->table, 'medico.id_utilizador = '.$this->table.'.id_utilizador');
	    //$this->db->where($this->table.'.admin', 3);
        
        $this->db->order_by('id', "desc");
	    $query = $this->db->get();
        return $query->result();
    }

    public function create(){
        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'address' => $this->input->post('address'),
            'date' => $this->input->post('date'),
            'hour' => $this->input->post('hour')
        );
        $this->db->insert($this->table,$data);
    }
    
    public function delete($id){ //done
        $this->db->where('id',$id);
        return $this->db->delete($this->table);
    }

    public function update(){ //done
       
        $data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'address' => $this->input->post('address'),
            'date' => $this->input->post('date'),
            'hour' => $this->input->post('hour'),
            'id_client' => '1'
        );

        $this->db->where('id', $data['id']);
        return $this->db->update('query',$data);
        
    }

    
    public function getAll(){
        return $this->db->get('query')->result_array();
    }

      
    public function get_product_by_id($id){
        $query = $this->db->get_where($this->table, array('id'=>$id));
        return $query->row();
    }

}