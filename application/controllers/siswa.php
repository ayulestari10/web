<?php 

class Siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('siswa_model');
		$nisn = $this->session->userdata('nisn');
		if (!isset($nisn)) {
		   redirect('login/siswa');
		   exit;
		}
	}
	
	function index(){
		$data = array(
			'data' 		=> $this->siswa_model->get_data_bynisn($this->session->userdata('nisn')),
			'title'		=> 'Penerimaan Siswa Baru',
			'content'	=> 'input_data'
		);
		$this->load->view('includes/template', $data);
	}

	function logout_siswa(){
		$this->session->unset_userdata('nisn');
		redirect('login/siswa');
	}

	function input_data(){

		if($this->input->post('input_data')){
			$input = array (
				'nama'				=> $this->input->post('nama'),
				'foto'				=> $this->session->userdata('nisn') . '.png',
				'jenis_kelamin'		=> $this->input->post('jenis_kelamin'),
				'tempat_lahir'		=> $this->input->post('tempat_lahir'),
				'tanggal'			=> $this->input->post('tanggal'),
				'bulan'				=> $this->input->post('bulan'),
				'tahun'				=> $this->input->post('tahun'),
				'alamat_lengkap'	=> $this->input->post('alamat_lengkap'),
				'no_telp_hp'		=> $this->input->post('no_telp_hp'),
				'email'				=> $this->input->post('email'),
				'keahlian'			=> $this->input->post('keahlian'),
				'nama_sekolah'		=> $this->input->post('nama_sekolah'),
				'tahun_lulus'		=> $this->input->post('tahun_lulus'),
				'no_sttb'			=> $this->input->post('no_sttb'),
				'nilai_bing'		=> $this->input->post('nilai_bing'),
				'nilai_bindo'		=> $this->input->post('nilai_bindo'),
				'nilai_matematika'	=> $this->input->post('nilai_matematika'),
				'nilai_ipa'			=> $this->input->post('nilai_ipa'),
				'nama_ayah'			=> $this->input->post('nama_ayah'),
				'nama_ibu'			=> $this->input->post('nama_ibu'),
				'pekerjaan_ayah'	=> $this->input->post('pekerjaan_ayah'),
				'pekerjaan_ibu'		=> $this->input->post('pekerjaan_ibu')
			);
			$this->siswa_model->update($this->session->userdata('nisn'), $input);
			$nisn = $this->uri->segment(3);
			$this->siswa_model->do_upload($nisn);

			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil disimpan!</div>');
			redirect('siswa/periksa');
			exit;
		}
			
		$data = array(
			'data' 		=> $this->siswa_model->get_data_bynisn($this->session->userdata('nisn')),
			'title'		=> 'Lengkapi Data | Penerimaan Siswa Baru',
			'content'	=> 'input_data'
		);
		$this->load->view('includes/template', $data);

	}

	function periksa(){
		$data = array(
			'data' 		=> $this->siswa_model->get_data_bynisn($this->session->userdata('nisn')),
			'title'		=> 'Data | Penerimaan Siswa Baru',
			'content'	=> 'view'
		);
		$this->load->view('includes/template', $data);
	}
	
	function kartu(){
		$data = array(
        	'data' 		=> $this->siswa_model->get_data_bynisn($this->session->userdata('nisn')),
        	'nisn'	=> $this->siswa_model->get_id($this->session->userdata('nisn'))
        );
        $this->load->view('kartu', $data);
	}
	
	public function kartu_peserta() {
        $data = array(
        	'data' 	=> $this->siswa_model->get_data_bynisn($this->session->userdata('nisn')),
        	'nisn'	=> $this->siswa_model->get_id($this->session->userdata('nisn'))
        );
        $html = $this->load->view('kartu', $data, true);
 
        $pdfFilePath = $this->session->userdata('nisn').".pdf";
 
        $this->load->library('m_pdf');
 
        $this->m_pdf->pdf->WriteHTML($html);
 
        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
    }

    public function formulir() {
        $data = array(
        	'data' 		=> $this->siswa_model->get_data_bynisn($this->session->userdata('nisn')),
        	'nisn'	=> $this->siswa_model->get_id($this->session->userdata('nisn'))
        );
        $html = $this->load->view('formulir_pendaftaran', $data, true);
 
        $pdfFilePath = $this->session->userdata('nisn').".pdf";
 
        $this->load->library('m_pdf');
 
        $this->m_pdf->pdf->WriteHTML($html);
 
        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
    }
	
}

 ?>