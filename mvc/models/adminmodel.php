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

    public function insertdata($tbl, $data) {
        return $this->db->insert($tbl, $data);
    }

    public function updategasbound($user_table, $id, $gasbound) {
        
            return $this->db->update($user_table, $id, $gasbound);
        

    }

    public function deleteuser($user_table, $id) {
        return $this->db->delete($user_table, $id);

    }
}