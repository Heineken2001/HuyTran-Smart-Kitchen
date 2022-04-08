<?php
// session_start();
class login extends Controller {
    public function __construct() {
        $data = array();
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('components/header');
        $this->load->view('login');
        $this->load->view('components/footer');
    }
    public function checklogin()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
        }
        else header("location:" . BASE_URL . "/login");

        $tbl_user = 'users';
        $usermodel = $this->load->model('usermodel');
        $userlist = $usermodel->checklogin($username, $password);

        if (sizeof($userlist)!=0) {
            $_SESSION['user'] = $username;
            header("location:". BASE_URL . "/");
        }
        else header("location:" .BASE_URL. "/login");

    }
}
?>