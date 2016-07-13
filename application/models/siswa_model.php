<?php  

class Siswa_model extends CI_Model{
	private $table;
	private $key;
	var $foto;
	var $galerry_path_url;

	function __construct(){
		parent::__construct();
		$this->table 			= 'siswa';
		$this->key 				= 'nisn';
		$this->foto 			= realpath(APPPATH.'../foto');
		$this->galerry_path_url = base_url().'foto/';
	}

	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}

	
	function get_data_bynisn($nisn){
		$this->db->where($this->key, $nisn); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($nisn, $data){
		$this->db->where($this->key, $nisn); 
		return $this->db->update($this->table, $data);
	}

	function delete($nisn){
		return $this->db->delete($this->table, array($this->key => $nisn)); 
	}

	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}


	function get_id($nisn){
		$this->db->where($this->key, $nisn); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$nisn = $row->nisn;
		}
		return $nisn;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM siswa ORDER BY nisn ASC LIMIT 1');
		foreach($data->result() as $row){
			$nisn = $row->nisn;
		}
		return $nisn;
	}

	function do_upload($nisn){

		$config = array (
			'file_name' 	=> $nisn.'.png',
			'upload_path'	=> '/foto',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' 	=> $this->foto,
			'max_size' 		=> 2000
		);

		$this->load->library('upload', $config);
		$this->upload->do_upload();	
	}

}

 ?>