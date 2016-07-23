<?php 

class Nilai extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('nilai_model');
		$nisn = $this->session->userdata('nisn');

		if (!isset($nisn)) {
		   redirect('login/siswa');
		   exit;
		}
	}
	
	function index(){
		$data = array(
			'data_nilai' 		=> $this->nilai_model->get_data_bynisn($this->session->userdata('nisn')),
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
			$this->nilai_model->update($this->session->userdata('nisn'), $input);
			redirect('orang_tua');
			exit;
		}
			
		$data = array(
			'data_nilai' 		=> $this->nilai_model->get_data_bynisn($this->session->userdata('nisn')),
			'title'				=> 'Lengkapi Data | Penerimaan Siswa Baru',
			'content'			=> 'data_nilai'
		);
		$this->load->view('includes/template', $data);

	}
	
}

 ?>