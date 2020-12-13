<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

 public function __construct() {
    parent::__construct();
$this->load->library('pagination');
    $this->load->model('Pemilik_mod');
    $this->load->library('form_validation');

  }
	
	public function index()
	{
		$this->load->view('pemilik/pemilik_dashboard');
	}


	public function addpage(){
		$this->load->view('pemilik/tambah');
	}

	public function savedatakos(){

if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->Pemilik_mod->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Pemilik_mod->savekos();

        $idkosan = $this->Pemilik_mod->getid();
         $this->Pemilik_mod->save_kriteria($idkosan); 
        $this->uploadgambar($idkosan);
        // Panggil fungsi save() yang ada di SiswaModel.php
        $this->session->set_flashdata('res', 'success|Penambahan Kos Berhasil|success');
      } else {
        $this->session->set_flashdata('res', 'failed|Penambahan kos gagal|error');
      }
      redirect('pemilik/dashboard/addpage');
    }
   
  }


  	public function uploadgambar($idkosan){
  		  $data = array();
       

           if( !empty($_FILES['upload_Files']['name'])){
            $filesCount = count($_FILES['upload_Files']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['upload_File']['name'] = $_FILES['upload_Files']['name'][$i];
                $_FILES['upload_File']['type'] = $_FILES['upload_Files']['type'][$i];
                $_FILES['upload_File']['tmp_name'] = $_FILES['upload_Files']['tmp_name'][$i];
                $_FILES['upload_File']['error'] = $_FILES['upload_Files']['error'][$i];
                $_FILES['upload_File']['size'] = $_FILES['upload_Files']['size'][$i];
                $uploadPath ='./assets/images/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg|GIF|JPG|PNG|BMP|JPEG'; 
                $config['overwrite']     = true;
                $config['max_size']      = 99999;                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('upload_File')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['id'] = uniqid();
                    $uploadData[$i]['id_kosan'] = $idkosan;
                   

                  
                }
                else{
                 $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['id'] = uniqid();
                    $uploadData[$i]['id_kosan'] = $idkosan;
                   
                }
            }            
            if(!empty($uploadData)){
                //Insert file information into the database
                $insert = $this->Pemilik_mod->insertGallery($uploadData);
                
            }


          } 


			        

  	}


  		public function datakoslist(){

  			   $config['base_url'] = site_url('pemilik/dashboard/datakoslist'); //site url
        $config['total_rows'] = $this->db->count_all('kosan'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
  
        $data['data'] = $this->Pemilik_mod->get_kos_list($config["per_page"], $data['page']);           
      
        $data['pagination'] = $this->pagination->create_links();
 
        //load view mahasiswa view
        $this->load->view('pemilik/data',$data);
  		}
	
	
}
