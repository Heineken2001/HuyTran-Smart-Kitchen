<?php
    class summaryreportmodel extends Model {
        public function __construct()
        {
            parent::__construct();
        }
        public function getallrecord($id){
            return $this->db->getallrecord($id);
        }
    }
?>