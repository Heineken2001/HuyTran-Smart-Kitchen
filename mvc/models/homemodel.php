<?php
class homemodel extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function getdevice($table) {
        // $sql = 'SELECT * FROM product ORDER BY ID DESC';
        // $query = $this->db->query($sql);
        // $result = $query->fetchAll();
        // return $result;
        return $this->db->select($table);
    }

    public function insertdata($tbl, $data) {
        return $this->db->insert($tbl, $data);
    }
}