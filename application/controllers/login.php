<?php  

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('siswa_model');
	}

	function siswa(){
		if($this->input->post('login')){
			$data = array(
				'nisn'				=> $this->input->post('nisn'),
				'password' 			=> md5($this->input->post('password')),
				'no_pendaftaran'	=> $this->siswa_model->get_id($this->input->post('nisn'))
			);
			$data_siswa = $this->login_model->cek_login_siswa($data);
			if($this->login_model->rows == 1){
				$this->session->set_userdata($data);
				redirect('siswa');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Gagal Login!</div>'); 
				redirect('login/siswa');
				exit;
			}
		}
		$data = array(
			'title'		=> 'LOGIN | Penerimaan Siswa Baru',
			'content'	=> 'login'
		);
		$this->load->view('includes/template', $data);

	}

	function admin(){
		if($this->input->post('login')){
			$data = array(
				'username'		=> $this->input->post('username'),
				'password' 		=> md5($this->input->post('password'))
			);
			$data_admin = $this->login_model->cek_login_admin($data);
			if($this->login_model->rows == 1){
				$this->session->set_userdata($data);
				redirect('admin');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Gagal Login!</div>'); 
				redirect('login/admin');
				exit;
			}
		}
		$data = array(
			'title'		=> 'LOGIN | Penerimaan Siswa Baru',
			'content'	=> 'login_admin'
		);
		$this->load->view('includes/template', $data);
	}

}
?>