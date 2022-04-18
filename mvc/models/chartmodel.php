<?php
    class chartmodel extends Model {
        public function __construct()
        {
            parent::__construct();
        }
        public function getrecord($id, $devid){
            return $this->db->getrecord($id, $devid);
        }
    }
?>