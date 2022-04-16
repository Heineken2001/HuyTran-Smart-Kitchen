<?php
class adminmodel extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function getdata($table) {
        // $sql = 'SELECT * FROM product ORDER BY ID DESC';
        // $query = $this->db->query($sql);
        // $result = $query->fetchAll();
        // return $result;
        return $this->db->select($table);
    }

    public function getreportunsolved() {
        return $this->db->getreportunsolved();
    }

    public function getallreport() {
        return $this->db->getallreport();
    }

    public function getdreportdetails($id) {
        return $this->db->getreportdetails($id);
    }

    public function insertdata($tbl, $data) {
        return $this->db->insert($tbl, $data);
    }

    public function updategasbound($user_table, $id, $gasbound) {
        
            return $this->db->update($user_table, $id, $gasbound);
        

    }

    public function updatereport($id) {
        return $this->db->updatereport($id);
    }

    public function deleteuser($user_table, $id) {
        return $this->db->delete($user_table, $id);

    }

    
}