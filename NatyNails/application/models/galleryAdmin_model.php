<?php
class GalleryAdmin_model extends CI_Model{
    protected $table = 'image';
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('text','string','url'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('login_model');
    }
    
    public function get_list_posts(){ //done
        $this->db->select('*');    
		$this->db->from('image');
		//$this->db->join($this->table, 'medico.id_utilizador = '.$this->table.'.id_utilizador');
	    //$this->db->where($this->table.'.admin', 3);
        
        $this->db->order_by('id', "desc");
	    $query = $this->db->get();
        return $query->result();
    }

    public function uploadImg(){
        $file = $_FILES['img_url'];
        $fileName = $_FILES['img_url']['name'];
        $fileTmpName = $_FILES['img_url']['tmp_name'];
        $fileSize = $_FILES['img_url']['size'];
        $fileError = $_FILES['img_url']['error'];
        $filetype = $_FILES['img_url']['type'];

        $fileExt = explode('.', $fileName); //explode by '.' to separate ex:  myimg.jpg
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png','gif');

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = $destination_folder = $_SERVER['DOCUMENT_ROOT']."/codeIgniter/natynails/public/img/posts/".$file['name'];
                move_uploaded_file($fileTmpName, $fileDestination);
                return true;
            }else{
                echo "There was an error uploadind your file";
                return false;
            }
        }else{
            echo "You cannot upload files f this type";
            return false;
        }
    }

    public function create(){  //done
        //enter img into img_folder
        $this->uploadImg();
        if($this->uploadImg()){
            if($_FILES['img_url']['name'] != null)
                $img_url = $_FILES['img_url']['name'];
            else
                $img_url = "defaultimage.jpg";
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'materials' => $this->input->post('materials'),
                'filters' => $this->input->post('filters'),
                'img_url' => $img_url,
                'published' => '1'
            );
            $this->db->insert($this->table,$data);
        }
    }
    
    public function delete($id){ //done
        $this->db->where('id',$id);
        return $this->db->delete($this->table);
    }

    public function update(){ //done
        if($this->uploadImg()){
            $this->uploadImg();
            if($_FILES['img_url']['name'] != null)
                $img_url = $_FILES['img_url']['name'];
            else
                $img_url = "defaultimage.jpg";
            $_data = array(
                'id' => $this->input->post('id'),
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'materials' => $this->input->post('materials'),
                'filters' => $this->input->post('filters'),
                'img_url' => $img_url,
                'published' => '1'
            );
            $this->db->where('id', $_data['id']);
            return $this->db->update('image',$_data);
        }
    }

    
    public function getAll(){
        return $this->db->get('image')->result_array();
    }

      
    public function get_product_by_id($id){
        $query = $this->db->get_where($this->table, array('id'=>$id));
        return $query->row();
    }

}