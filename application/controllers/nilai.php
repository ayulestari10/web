<?php 

class Nilai extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('nilai_model');
		$no_pendaftaran = $this->session->userdata('no_pendaftaran');

		if (!isset($no_pendaftaran)) {
		   redirect('login/siswa');
		   exit;
		}
	}
	
	function index(){
		$data = array(
			'data_nilai' 		=> $this->nilai_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'title'				=> 'Penerimaan Siswa Baru',
			'content'			=> 'data_nilai'
		);
		$this->load->view('includes/template', $data);
	}

	function input_data(){

		if($this->input->post('input_nilai')){
			$input = array (
				'nilai_bing'		=> $this->input->post('nilai_bing'),
				'nilai_bindo'		=> $this->input->post('nilai_bindo'),
				'nilai_matematika'	=> $this->input->post('nilai_matematika'),
				'nilai_ipa'			=> $this->input->post('nilai_ipa')
			);
			$this->nilai_model->update($this->session->userdata('no_pendaftaran'), $input);
			redirect('orang_tua');
			exit;
		}
			
		$data = array(
			'data_nilai' 		=> $this->nilai_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'title'				=> 'Lengkapi Data | Penerimaan Siswa Baru',
			'content'			=> 'data_nilai'
		);
		$this->load->view('includes/template', $data);

	}
	
}

 ?>