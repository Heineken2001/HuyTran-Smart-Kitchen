<?php
class homemodel extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function category($table) {
        // $sql = 'SELECT * FROM product ORDER BY ID DESC';
        // $query = $this->db->query($sql);
        // $result = $query->fetchAll();
        // return $result;
        return $this->db->select($table);
    }
}