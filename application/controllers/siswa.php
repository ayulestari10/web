<?php 

class Siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('siswa_model');
		$this->load->model('sekolah_model');
		$this->load->model('nilai_model');
		$this->load->model('orang_tua_model');

		$no_pendaftaran = $this->session->userdata('no_pendaftaran');
		if (!isset($no_pendaftaran)) {
		   redirect('login/siswa');
		   exit;
		}
	}
	
	function index(){
		$data = array(
			'data_siswa' 		=> $this->siswa_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'title'				=> 'Penerimaan Siswa Baru',
			'content'			=> 'input_data'
		);
		$this->load->view('includes/template', $data);
	}

	function logout_siswa(){
		$this->session->unset_userdata('no_pendaftaran');
		$this->session->unset_userdata('nisn');
		redirect('login/siswa');
	}

	function input_data(){

		if($this->input->post('input_biodata')){
			$input = array (
				'nama'				=> $this->input->post('nama'),
				'foto'				=> $this->session->userdata('no_pendaftaran') . '.png',
				'jenis_kelamin'		=> $this->input->post('jenis_kelamin'),
				'tempat_lahir'		=> $this->input->post('tempat_lahir'),
				'tanggal'			=> $this->input->post('tanggal'),
				'bulan'				=> $this->input->post('bulan'),
				'tahun'				=> $this->input->post('tahun'),
				'alamat_lengkap'	=> $this->input->post('alamat_lengkap'),
				'no_telp_hp'		=> $this->input->post('no_telp_hp'),
				'email'				=> $this->input->post('email'),
				'keahlian'			=> $this->input->post('keahlian')
			);
			$this->siswa_model->update($this->session->userdata('no_pendaftaran'), $input);
			$no_pendaftaran = $this->uri->segment(3);
			$this->siswa_model->do_upload($no_pendaftaran);
	
			redirect('sekolah');
			exit;
		}
			
		$data = array(
			'data_siswa' 	=> $this->siswa_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'title'			=> 'Lengkapi Data | Penerimaan Siswa Baru',
			'content'		=> 'input_data'
		);
		$this->load->view('includes/template', $data);

	}

	function periksa(){
		$data = array(
			'data_siswa' 		=> $this->siswa_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'data_sekolah' 		=> $this->sekolah_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'data_nilai' 		=> $this->nilai_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'data_ortu' 		=> $this->orang_tua_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'title'				=> 'Data | Penerimaan Siswa Baru',
			'content'			=> 'view'
		);
		$this->load->view('includes/template', $data);
	}
	
	function kartu(){
		$data = array(
        	'data' 				=> $this->siswa_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
        	'data_sekolah' 		=> $this->sekolah_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran'))
        );
        $this->load->view('kartu', $data);
	}
	
	public function kartu_peserta() {
        $data = array(
        	'data' 				=> $this->siswa_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
        	'data_sekolah' 		=> $this->sekolah_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran'))
        );
        $html = $this->load->view('kartu', $data, true);
 
        $pdfFilePath = $this->session->userdata('nisn').".pdf";
 
        $this->load->library('m_pdf');
 
        $this->m_pdf->pdf->WriteHTML($html);
 
        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
    }

    public function formulir() {
        $data = array(
        	'data_siswa' 		=> $this->siswa_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'data_sekolah' 		=> $this->sekolah_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'data_nilai' 		=> $this->nilai_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'data_ortu' 		=> $this->orang_tua_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),        );
        $html = $this->load->view('formulir_pendaftaran', $data, true);
 
        $pdfFilePath = "Formulir ".$this->session->userdata('nisn').".pdf";
 
        $this->load->library('m_pdf');
 
        $this->m_pdf->pdf->WriteHTML($html);
 
        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
    }
	
}

 ?>