<?php 

class Orang_tua extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('orang_tua_model');
		$no_pendaftaran = $this->session->userdata('no_pendaftaran');

		if (!isset($no_pendaftaran)) {
		   redirect('login/siswa');
		   exit;
		}
	}
	
	function index(){
		$data = array(
			'data_ortu' 		=> $this->orang_tua_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'title'				=> 'Penerimaan Siswa Baru',
			'content'			=> 'data_ortu'
		);
		$this->load->view('includes/template', $data);
	}

	function input_data(){

		if($this->input->post('input_ortu')){
			$input = array (
				'nama_ayah'			=> $this->input->post('nama_ayah'),
				'nama_ibu'			=> $this->input->post('nama_ibu'),
				'pekerjaan_ayah'	=> $this->input->post('pekerjaan_ayah'),
				'pekerjaan_ibu'		=> $this->input->post('pekerjaan_ibu')
			);
			$this->orang_tua_model->update($this->session->userdata('no_pendaftaran'), $input);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil disimpan!</div>');
			redirect('siswa/periksa');
			exit;
		}
			
		$data = array(
			'data_ortu' 		=> $this->orang_tua_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'title'				=> 'Lengkapi Data | Penerimaan Siswa Baru',
			'content'			=> 'data_ortu'
		);
		$this->load->view('includes/template', $data);

	}
	
}

 ?>