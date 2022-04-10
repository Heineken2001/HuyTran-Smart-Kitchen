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

        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && $_POST['fname']!="" && $_POST['username']!="" && $_POST['email']!="" && $_POST['password']!="" && $_POST['confirmpassword']!="") {
            $fname = $_POST['fname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];
            
            $tbl_user = 'users';
            $usermodel = $this->load->model('usermodel');
            // echo $username;
            $userlist = $usermodel->checkregis($username);
            
            // print_r($userlist);
            if (sizeof($userlist)!=0) {
                $_SESSION['notice'] = "Account already exists! Please choose another username.";
                header("location:" . BASE_URL .  "/register");
            }
            
            else if ($password != $confirmpassword) {
                $_SESSION['notice'] = "Invalid confirmed password!!";
                header("location:" . BASE_URL .  "/register");
            }
    
            else {
                $user = array (
                    "USRNAME" => $username,
                    "FNAME" => $fname,
                    "PASS" => md5($password),
                    "EMAIL" => $email,
                    "GASBOUND" => 600
                );
                $res = $usermodel->insertdata($tbl_user, $user);
                // $this->load->view('registersuccess', []);
                header('Location: ' .BASE_URL.'/login');
            }
        }
        else {
            $_SESSION['notice'] ="All field can not be empty!"; 
            header("Location: ".BASE_URL."/register");
        }

        $this->load->view('components/footer');
    }
}
?>
