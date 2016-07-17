<?php 

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('siswa_model');

		$username = $this->session->userdata('username');
		if (!isset($username)) {
		   redirect('login/admin');
		   exit;
		}
	}

	function index(){
		$data = array(
			'nisn'		=> $this->uri->segment(3),
			'dt' 		=> $this->siswa_model->get_all(),
			'title'		=> 'Daftar Siswa | Penerimaan Siswa Baru',
			'content'	=> 'admin_area'
		);
		$this->load->view('includes/template', $data);
	}

	function logout_admin(){
		$this->session->unset_userdata('username');
		redirect('login/admin');
	}

	function detail(){
		$nisn = $this->uri->segment(3);

		$data = array(
			'data' 		=> $this->siswa_model->get_data_bynisn($nisn),
			'title'		=> 'Edit Pengumuman | Penerimaan Siswa Baru',
			'content'	=> 'detail'
		);
		$this->load->view('includes/template', $data);
	}

	function pengumuman_lulus(){
		$data = array(
			'nisn'		=> $this->uri->segment(3),
			'dt' 		=> $this->siswa_model->get_all(),
			'title'		=> 'Pengumuman | Penerimaan Siswa Baru',
			'content'	=> 'pengumuman_lulus'
		);
		$this->load->view('includes/template', $data);
	}						

	function edit_siswa(){
		$nisn = $this->uri->segment(3);

		if (!isset($nisn)) {
		    redirect('admin');
		    exit;
		}
		if ($this->input->post('edit')){
			$hasil = $this->input->post('hasil');

			$this->siswa_model->update($nisn, array('hasil' => $hasil));
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diedit!</div>');
			redirect('admin');
		}

		$data = array(
			'data' 		=> $this->siswa_model->get_data_bynisn($nisn),
			'title'		=> 'Edit Pengumuman | Penerimaan Siswa Baru',
			'content'	=> 'edit_data_by_admin'
		);
		$this->session->set_flashdata('nisn', $nisn);
		$this->load->view('includes/template', $data);
	}

	function delete_siswa(){
		$nisn = $this->uri->segment(3);
		if(isset($nisn)){
			$this->siswa_model->delete($nisn);
		} else {
			redirect('admin');
		}
		redirect('admin');
	}

}

 ?>