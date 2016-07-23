<?php  

class Register extends CI_Controller{

	function index(){
		$data = array(
			'title'		=> 'Penerimaan Siswa Baru',
			'content'	=> 'regist'
		);
		$this->load->view('includes/template', $data);
	}

	function regist(){
		$nisn 		= $this->input->post('nisn');
		$password 	= $this->input->post('password');

		if(isset($nisn, $password)){
			if($this->input->post('password') == $this->input->post('password2')){
				$this->load->model('siswa_model');

				$this->load->model('sekolah_model');
				$this->load->model('nilai_model');
				$this->load->model('orang_tua_model');

				$cek_data = $this->siswa_model->get_data_bynisn($nisn);
				if(isset($cek_data->nisn)){
					$data_nisn = $cek_data->nisn;
				} else {
					$data_nisn = "";
				}
				if($data_nisn != $nisn){
					$data = array(
						'nisn'		=> $nisn,
						'password'	=> md5($password)
					);
					$this->siswa_model->insert($data);

					$no_pendaftaran	= $this->siswa_model->get_id($nisn);

					$this->sekolah_model->insert(array('no_pendaftaran' => $no_pendaftaran));
					$this->nilai_model->insert(array('no_pendaftaran' => $no_pendaftaran));
					$this->orang_tua_model->insert(array('no_pendaftaran' => $no_pendaftaran));

					$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Registrasi Berhasil</div>');
				} 
				else {
					$this->session->set_flashdata('msg', '<div class="alert alert-warning" style="text-align:center;">nisn yang anda masukkan telah terdaftar sebelumnya.</div>');
				}
				redirect('login/siswa');
			} 
			else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Password harus sama dengan Konfirmasi Password</div>');
				$this->index();
			}
		}
		else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Registrasi Gagal</div>');
			$this->index();
		}
	}
}

?>