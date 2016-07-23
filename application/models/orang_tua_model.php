<?php  

class Orang_tua_model extends CI_Model{
	private $table;
	private $key;

	function __construct(){
		parent::__construct();
		$this->table 			= 'orang_tua';
		$this->key 				= 'no_pendaftaran';
	}

	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}

	
	function get_data_byno_pendaftaran($no_pendaftaran){
		$this->db->where($this->key, $no_pendaftaran); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($no_pendaftaran, $data){
		$this->db->where($this->key, $no_pendaftaran); 
		return $this->db->update($this->table, $data);
	}

	function delete($no_pendaftaran){
		return $this->db->delete($this->table, array($this->key => $no_pendaftaran)); 
	}

	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}


	function get_id($no_pendaftaran){
		$this->db->where($this->key, $no_pendaftaran); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$no_pendaftaran = $row->no_pendaftaran;
		}
		return $no_pendaftaran;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM orang_tua ORDER BY no_pendaftaran ASC LIMIT 1');
		foreach($data->result() as $row){
			$no_pendaftaran = $row->no_pendaftaran;
		}
		return $no_pendaftaran;
	}

}

 ?>