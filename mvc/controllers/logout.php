<?php
class logout extends Controller {
    public function __construct() {
        $data = array();
        parent::__construct();
    }
    public function index()
    {
        unset($_SESSION['user']);
        header("location:" . BASE_URL . "/login");
    }
}
?>