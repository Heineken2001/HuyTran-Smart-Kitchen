<?php
    class chartmodel extends Model {
        public function __construct()
        {
            parent::__construct();
        }
        public function getGasdate(){
            return $this->db->getDateGas();
        }
    }
?>