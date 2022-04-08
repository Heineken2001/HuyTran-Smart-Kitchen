<?php

use function PHPSTORM_META\type;

class register extends Controller {
    public function __construct() {
        $data = array();
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('components/header');
        $this->load->view('register');
        $this->load->view('components/footer');
    }

    public function create()
    {
        $this->load->view('components/header');

        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword'])) {
            $fname = $_POST['fname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];
        }
        else header("location:" . BASE_URL .  "/register");

        if ($password != $confirmpassword) {
            header("location:" . BASE_URL .  "/register");
        }

        $tbl_user = 'users';
        $usermodel = $this->load->model('usermodel');
        // echo $username;
        $userlist = $usermodel->checkregis($username);
        
        // print_r($userlist);
        if (sizeof($userlist)!=0) {
            header("location:" . BASE_URL .  "/register");
        }

        else {
            $user = array (
                "USRNAME" => $username,
                "FNAME" => $fname,
                "PASS" => $password,
                "EMAIL" => $email,
            );
            $res = $usermodel->insertdata($tbl_user, $user);
            $this->load->view('registersuccess', []);
            // header("location" . BASE_URL . "/login");
        }
        $this->load->view('components/footer');
    }
}
?>
