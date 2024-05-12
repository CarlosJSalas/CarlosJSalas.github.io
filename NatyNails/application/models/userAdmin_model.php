<?php
class UserAdmin_model extends CI_Model{
    protected $table = 'user';
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('login_model');
    }
    
    public function get_list_users(){ //done
        $this->db->select('*');    
		$this->db->from('user');
        $this->db->order_by('id', "desc");
	    $query = $this->db->get();
        return $query->result();
    }

    public function create(){
        $finalPassword = md5($this->input->post('password'));
        $data = array(
            'name' => $this->input->post('name'),
            'mail' => $this->input->post('mail'),
            'admin' => 0,
            'password' => $finalPassword,
            'phone' => $this->input->post('phone'),
            'birth'=> $this->input->post('birth')
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
            'mail' => $this->input->post('mail'),
            'admin' => $this->input->post('admin'),
            'phone' => $this->input->post('phone'),
            'birth'=> $this->input->post('birth')
        );
        $this->db->where('id', $data['id']);
        return $this->db->update('user',$data);
        
    }

    
    public function getAll(){
        return $this->db->get('user')->result_array();
    }

      
    public function get_user_by_id($id){
        $query = $this->db->get_where($this->table, array('id'=>$id));
        return $query->row();
    }
    
}