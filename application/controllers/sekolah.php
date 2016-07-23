<?php 

class Sekolah extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('sekolah_model');
		$nisn = $this->session->userdata('nisn');

		if (!isset($nisn)) {
		   redirect('login/siswa');
		   exit;
		}
	}
	
	function index(){
		$data = array(
			'data_sekolah' 		=> $this->sekolah_model->get_data_bynisn($this->session->userdata('nisn')),
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
				'no_sttb'			=> $this->input->post('no_sttb')
			);
			$this->sekolah_model->update($this->session->userdata('nisn'), $input);
			redirect('nilai');
			exit;
		}
			
		$data = array(
			'data_sekolah' 		=> $this->sekolah_model->get_data_bynisn($this->session->userdata('nisn')),
			'title'				=> 'Lengkapi Data | Penerimaan Siswa Baru',
			'content'			=> 'data_sekolah'
		);
		$this->load->view('includes/template', $data);

	}
	
}

 ?>