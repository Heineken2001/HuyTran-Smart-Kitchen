<?php
class recordnowmodel extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function getLightdata() {
        // $sql = 'SELECT * FROM product ORDER BY ID DESC';
        // $query = $this->db->query($sql);
        // $result = $query->fetchAll();
        // return $result;
        return $this->db->getLightNow();
    }

    public function insertdata($tbl, $data) {
        return $this->db->insert($tbl, $data);
    }
}