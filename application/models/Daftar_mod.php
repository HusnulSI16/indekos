<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_mod extends CI_Model
{
    private $_table = "aboutus_text";

    public $id_user;
    public $nama_user;
    public $email_user;
    public $password;
    public $level;
    public $telepon;

  

  
 public function validation($mode) {
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    // Tambahkan if apakah $mode save atau update

    if ($mode == "save") 
     
      $this->form_validation->set_rules('nama_user', 'nama_user', 'required');
        $this->form_validation->set_rules('email_user', 'email_user', 'required');
          $this->form_validation->set_rules('level', 'level', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
       $this->form_validation->set_rules('telepon', 'telepon', 'required');

    if ($this->form_validation->run()) // Jika validasi benar
      return true; // Maka kembalikan hasilnya dengan TRUE
    else
    // Jika ada data yang tidak sesuai validasi
      return false; // Maka kembalikan hasilnya dengan FALSE
    
  }
 
    public function getAll()
    {
        return $this->db->query("SELECT * FROM user")->result();
    }
     
   public function save(){
      $post = $this->input->post();
         $data   = array(
        'nama_user'  => $post['nama_user'],
        'email_user' => $post['email_user'],
        'password' => $post['password'],
        'telepon' => $post['telepon'],
        'level' => $post['level']
      );
      $this->db->insert("user", $data);
      
    

   }


      function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
   

    public function edit()
    {
          $gambar = "";
    if (!empty($_FILES["image"]["name"])) {
      $gambar = $this->_uploadImage();
      $this->_deleteImage();
    }
    else {
      $gambar = $this->input->post('old_image');
    }
    
    $this->db->query("UPDATE aboutus_text SET image ='". $gambar."' , text = '". $this->input->post('text')."'  "); // Untuk mengeksekusi perintah update data
 
    }
  
// about_usaha tabel


}
