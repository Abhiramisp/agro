<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agro_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function insert($table, $data)
    {
        if ($this->db->insert($table, $data)) {
            return true;
        }
    }
    public function check($table, $data)
    {
        $query = $this->db->get_where($table, $data);
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function getdatafromtable($table)
	{
		$query = $this->db->get_where($table);
		return $query->result();
	}
    public function getdatafromtable2($table,$data)
	{
		$query = $this->db->get_where($table,$data);
		return $query->result();
	}
    public function delete_data($table, $where) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_data($table, $data, $id_column, $id_value) {
        $this->db->where($id_column, $id_value);
        $this->db->update($table, $data);
    }
}
