<?php 

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('siswa_model');
		$this->load->model('sekolah_model');
		$this->load->model('nilai_model');
		$this->load->model('orang_tua_model');

		$username = $this->session->userdata('username');
		if (!isset($username)) {
		   redirect('login/admin');
		   exit;
		}
	}

	function index(){
		$data = array(
			'dt'		 			=> $this->admin_model->get_all_data(),
			'title'					=> 'Daftar Siswa | Penerimaan Siswa Baru',
			'content'				=> 'admin_area'
		);
		$this->load->view('includes/template', $data);
	}

	function logout_admin(){
		$this->session->unset_userdata('username');
		redirect('login/admin');
	}

	function detail(){
		$no_pendaftaran = $this->uri->segment(3);

		$data = array(
			'data_siswa' 		=> $this->siswa_model->get_data_byno_pendaftaran($no_pendaftaran),
			'data_sekolah' 		=> $this->sekolah_model->get_data_byno_pendaftaran($no_pendaftaran),
			'data_nilai' 		=> $this->nilai_model->get_data_byno_pendaftaran($no_pendaftaran),
			'data_ortu' 		=> $this->orang_tua_model->get_data_byno_pendaftaran($no_pendaftaran),

			'title'		=> 'Detail Siswa | Penerimaan Siswa Baru',
			'content'	=> 'detail'
		);
		$this->load->view('includes/template', $data);
	}

	function pengumuman_lulus(){
		$data = array(
			'no_pendaftaran'		=> $this->uri->segment(3),
			'dt' 		=> $this->siswa_model->get_all(),
			'title'		=> 'Pengumuman | Penerimaan Siswa Baru',
			'content'	=> 'pengumuman_lulus'
		);
		$this->load->view('includes/template', $data);
	}

	function cetak_pengumuman(){
		$data = array(
			'dt' 	=> $this->admin_model->get_all_data()
		);

        $html = $this->load->view('cetak_pengumuman', $data, true);
 
        $pdfFilePath = "Pengumuman Hasil Seleksi.pdf";
 
        $this->load->library('m_pdf');
 
        $this->m_pdf->pdf->WriteHTML($html);
 
        $this->m_pdf->pdf->Output($pdfFilePath, "D");  
	}				

	function edit_siswa(){
		$no_pendaftaran = $this->uri->segment(3);

		if (!isset($no_pendaftaran)) {
		    redirect('admin');
		    exit;
		}
		if ($this->input->post('edit')){
			$hasil = $this->input->post('hasil');

			$this->siswa_model->update($no_pendaftaran, array('hasil' => $hasil));
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diedit!</div>');
			redirect('admin');
		}

		$data = array(
			'data' 		=> $this->siswa_model->get_data_byno_pendaftaran($no_pendaftaran),
			'title'		=> 'Edit Pengumuman | Penerimaan Siswa Baru',
			'content'	=> 'edit_data_by_admin'
		);
		$this->session->set_flashdata('no_pendaftaran', $no_pendaftaran);
		$this->load->view('includes/template', $data);
	}

	function delete_siswa(){
		$no_pendaftaran = $this->uri->segment(3);
		if(isset($no_pendaftaran)){
			$this->siswa_model->delete($no_pendaftaran);
		} else {
			redirect('admin');
		}
		redirect('admin');
	}

}

 ?>