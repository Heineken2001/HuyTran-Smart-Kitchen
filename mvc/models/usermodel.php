<?php 
class usermodel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function checkregis($user) {
        return $this->db->getUser($user);
    }

    public function checklogin($user, $pass)
    {
        return $this->db->validate($user, $pass);
    }

    public function insertdata($tbl, $data)     
    {
        return $this->db->insert($tbl, $data);
    }

} 
?>