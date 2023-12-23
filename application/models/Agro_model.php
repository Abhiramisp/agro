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
    public function getdatafromtable2($table, $data)
    {
        $query = $this->db->get_where($table, $data);
        return $query->result();
    }
    public function delete_data($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_data($table, $data, $id_column, $id_value)
    {
        $this->db->where($id_column, $id_value);
        $this->db->update($table, $data);
    }

    public function getJoinedData($primaryTable, $joinTable, $commonColumn, $joinType = 'left')
    {
        $this->db->select('*');
        $this->db->from($primaryTable);
        $this->db->join($joinTable, "$primaryTable.$commonColumn = $joinTable.$commonColumn", $joinType);

        $query = $this->db->get();
        return $query->result();
    }

    public function getJoinedDataWithCondition($primaryTable, $joinTable, $commonColumn, $userType, $comp)
    {

        $this->db->select('*');
        $this->db->from($primaryTable);
        // $samp = $this->db->where($comp);
        $this->db->join($joinTable, "$primaryTable.$comp = $joinTable.$commonColumn");
        $this->db->where("$joinTable.user_type", $userType);


        $query = $this->db->get();
        return $query->result(); // Return joined data as an array of objects
    }
}
