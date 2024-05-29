<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class M_jabatan extends CI_Model{

    public $table = 'jabatan_pegawai';
    public $id = 'id';
    
    function tampil_data(){
        return $this->db->get($this->table)->result();
    }

    function input_data($data){
		$this->db->insert($this->table,$data);
		
	}
	
	function edit_data($where){		
		return $this->db->get_where($this->table,$where);
	}
	
	function update_data($id,$data){
		$this->db->where($this->id, $id);
		$this->db->update($this->table, $data);
	}

	public function delete($id)
    {
		// return $this->db->delete($this->table, array($id));
		$this->db->where($this->id, $id);
		return $this->db->delete($this->table);
    }
}