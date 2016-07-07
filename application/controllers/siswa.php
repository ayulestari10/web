<?php 

class Siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('siswa_model');
		$no_pendaftaran = $this->session->userdata('no_pendaftaran');
		if (!isset($no_pendaftaran)) {
		   redirect('login/siswa');
		   exit;
		}
	}
	
	function index(){
		$data = array(
			'data' 		=> $this->siswa_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'title'		=> 'Penerimaan Siswa Baru',
			'content'	=> 'input_data'
		);
		$this->load->view('includes/template', $data);
	}

	function input_data(){
		if($this->input->post('input_data')){
			$input = array (
				'nama'				=> $this->input->post('nama'),
				'foto'				=> 'id.png',
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
				'nisn'				=> $this->input->post('nisn'),
				'nilai_bing'		=> $this->input->post('nilai_bing'),
				'nilai_bindo'		=> $this->input->post('nilai_bindo'),
				'nilai_matematika'	=> $this->input->post('nilai_matematika'),
				'nilai_ipa'			=> $this->input->post('nilai_ipa'),
				'nama_ayah'			=> $this->input->post('nama_ayah'),
				'nama_ibu'			=> $this->input->post('nama_ibu'),
				'pekerjaan_ayah'	=> $this->input->post('pekerjaan_ayah'),
				'pekerjaan_ibu'		=> $this->input->post('pekerjaan_ibu')
			);
			$this->siswa_model->insert($input);
			$id_siswa 	= $this->siswa_model->get_last_data();
			$this->siswa_model->update($id_siswa, array('foto' => $id_siswa . '.png'));
			$this->siswa_model->do_upload($id_siswa);

			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil disimpan!</div>');
			redirect('siswa');
			exit;
		}
			
		$data = array(
			'data' 		=> $this->siswa_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'title'		=> 'Lengkapi Data | Penerimaan Siswa Baru',
			'content'	=> 'input_data'
		);
		$this->load->view('includes/template', $data);

	}

	function periksa(){
		$data = array(
			'data' 		=> $this->siswa_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'title'		=> 'Data | Penerimaan Siswa Baru',
			'content'	=> 'view'
		);
		$this->load->view('includes/template', $data);
	}

	function edit(){
		if ($this->input->post('edit_data')) {
			$input = array (
				'nama'				=> $this->input->post('nama'),
				//'foto'				=> $this->input->post('userfile'),
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
				'nisn'				=> $this->input->post('nisn'),
				'nilai_bing'		=> $this->input->post('nilai_bing'),
				'nilai_bindo'		=> $this->input->post('nilai_bindo'),
				'nilai_matematika'	=> $this->input->post('nilai_matematika'),
				'nilai_ipa'			=> $this->input->post('nilai_ipa'),
				'nama_ayah'			=> $this->input->post('nama_ayah'),
				'nama_ibu'			=> $this->input->post('nama_ibu'),
				'pekerjaan_ayah'	=> $this->input->post('pekerjaan_ayah'),
				'pekerjaan_ibu'		=> $this->input->post('pekerjaan_ibu')
			);
			$this->siswa_model->update($this->session->userdata('no_pendaftaran'), $input);
			//$id_siswa = $this->siswa_model->get_id($this->session->userdata('no_pendaftaran'));
			//$this->siswa_model->do_upload($id_siswa);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diedit!</div>');
		}

		$data = array(
			'data' 		=> $this->siswa_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
			'title'		=> 'View/Edit Data | Penerimaan Siswa Baru',
			'content'	=> 'view'
		);
		$this->load->view('includes/template', $data);
	}
	
	function kartu(){
		$data = array(
        	'data' 		=> $this->siswa_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
        	'id_siswa'	=> $this->siswa_model->get_id($this->session->userdata('no_pendaftaran'))
        );
        $this->load->view('kartu', $data);
	}
	
	public function kartu_peserta() {
        $data = array(
        	'data' 		=> $this->siswa_model->get_data_byno_pendaftaran($this->session->userdata('no_pendaftaran')),
        	'id_siswa'	=> $this->siswa_model->get_id($this->session->userdata('no_pendaftaran'))
        );
        //load the view and saved it into $html variable
        $html = $this->load->view('kartu', $data, true);
 
        //this the the PDF filename that user will get to download
        $pdfFilePath = $this->session->userdata('no_pendaftaran').".pdf";
 
        //load mPDF library
        $this->load->library('m_pdf');
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
    }
	
}

 ?>