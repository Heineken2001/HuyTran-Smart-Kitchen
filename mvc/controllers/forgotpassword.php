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
            }

            if (isset($_POST['email'])) {
                $email = $_POST['email'];
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
            $this->load->view('user/sendemailnotice');
            $this->load->view('components/footer');
        }
    }
?>