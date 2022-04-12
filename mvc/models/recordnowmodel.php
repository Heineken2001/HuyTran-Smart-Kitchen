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

    public function getBuzzerdata()
    {
        return $this->db->getBuzzerNow();
    }

    public function getHumiddata()
    {
        return $this->db->getHumidNow();
    }

    public function getHoomandata()
    {
        return $this->db->getHoomanNow();
    }

    public function getTempdata()
    {
        return $this->db->getTempNow();
    }

    public function getGasdata()
    {
        return $this->db->getGasNow();
    }

    public function getLightmode($id)
    {
        return $this->db->getLightMode($id);
    }

    public function insertdata($tbl, $data) {
        return $this->db->insert($tbl, $data);
    }
}