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

    public function checkforgot($user, $email)
    {
        return $this->db->validateforgot($user, $email);
    }

    public function insertdata($tbl, $data)     
    {
        return $this->db->insert($tbl, $data);
    }

    public function getdata($table) {
        return $this->db->select($table);
    }

    public function updategasbound($user_table, $id, $gasbound) {
        
        return $this->db->updategasbound($user_table, $id, $gasbound);
        
    }

    public function updatepassword($tbl_user, $id, $newpass) {
        return $this->db->updatepassword($tbl_user, $id, $newpass);

    }

    public function getdatabyid($table, $id) {
        return $this->db->selectbyid($table, $id);
    }

    public function updatedata($tbl_user, $user, $id) {
        return $this->db->update($tbl_user, $user, $id);
    }

} 
?>