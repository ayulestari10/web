<?php 

class Sekolah extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('sekolah_model');
		$no_pendaftaran = $this->session->userdata('no_pendaftaran');

		if (!isset($no_pendaftaran)) {
		   redirect('login/siswa');
		   exit;
		}
	}
	
	function index(){
		$data = array(
			'data_sekolah' 		=> $this->sekolah_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'title'				=> 'Penerimaan Siswa Baru',
			'content'			=> 'data_sekolah'
		);
		$this->load->view('includes/template', $data);
	}

	function input_data(){

		if($this->input->post('input_sekolah')){
			$input = array (
				'nama_sekolah'		=> $this->input->post('nama_sekolah'),
				'tahun_lulus'		=> $this->input->post('tahun_lulus'),
				'no_sttb'			=> $this->input->post('no_sttb'),
				'nisn'				=> $this->session->userdata('nisn')
			);
			$this->sekolah_model->update($this->session->userdata('no_pendaftaran'), $input);
			redirect('nilai');
			exit;
		}
			
		$data = array(
			'data_sekolah' 		=> $this->sekolah_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'title'				=> 'Lengkapi Data | Penerimaan Siswa Baru',
			'content'			=> 'data_sekolah'
		);
		$this->load->view('includes/template', $data);

	}
	
}

 ?>