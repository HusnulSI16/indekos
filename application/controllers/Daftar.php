<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

 public function __construct() {
    parent::__construct();

    $this->load->model('Daftar_mod');
    $this->load->library('form_validation');
 
 
  }
	public function index()
	{
		$this->load->view('user_daftar');
	}

	public function save(){

		 if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->Daftar_mod->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Daftar_mod->save();
      // Panggil fungsi save() 
       $this->session->set_flashdata('res', 'success|Pendaftaran Berhasil|success');
      } else {
       $this->session->set_flashdata('res', 'failed|Pendaftaran Gagal|error');
      }
      redirect('daftar');
    }
    $this->load->view('daftar');
	}
}
