<?php
    class forgotpassword extends Controller {
        public function __construct() {
            $data = array();
            parent::__construct();
        }
        public function index()
        {
            $this->load->view('components/header');
            $this->load->view('user/forgotpassword');
            $this->load->view('components/footer');
        }
        public function validate()
        {
            $this->load->view('components/header');

            if (isset($_POST['username'])) {
                $username = $_POST['username'];
                $_SESSION['username'] = $username;
            }

            if (isset($_POST['email'])) {
                $email = $_POST['email'];
                $_SESSION['email'] = $email;
            }

            $usersmodel = $this->load->model("usermodel");
            $userlist = $usersmodel->checkforgot($username, $email);

            if (sizeof($userlist)==0 ) {
                $_SESSION['notice'] = "Couldn't find your SmartKitchen Account";
                header('location:' . BASE_URL . '/forgotpassword');
            }
            else {
                header('location:' . BASE_URL . '/forgotpassword/emailtoken');

            }
            $this->load->view('components/footer');
        }
        public function emailtoken()
        {
            $this->load->view('components/header');

            function generateRandomString($length = 10) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }

            $randstring = generateRandomString();
            // $_SESSION['temppassword'] = $randstring;

            $usersmodel = $this->load->model("usermodel");
            $usersmodel->renewpassword($_SESSION['username'], md5($randstring));
            include_once './mail/sendmail.php';
            $this->load->view('user/sendemailnotice');
            $this->load->view('components/footer');
        }
    }
?>