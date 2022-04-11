<?php
    class user extends Controller {
        public function __construct() {
            $data = array();
            parent::__construct();
        }

        public function index() {
            if (isset($_SESSION['user']) && $_SESSION['user'] != "admin") {
                return $this->homepage();
            }
            else {
                if (isset($_SESSION['user']) && $_SESSION['user'] == "admin") {
                    header('Location: ' .BASE_URL.'/notfound');

                }
                else header('Location: ' .BASE_URL.'/login');
            }

        }

        public function homepage() {
            $user_table = 'users';
            $user_model = $this->load->model('usermodel');
            $user_id = $_SESSION['userid'];
            $data['user'] = $user_model->getdatabyid($user_table, $user_id);
            $this->load->view('components/header');

            $this->load->view('user/user', $data);
            
            $this->load->view('components/footer');
        }

        public function changeinfo($id) {
            $user_table = 'users';
            $user_model = $this->load->model('usermodel');
            $data['user'] = $user_model->getdatabyid($user_table, $id);
            $this->load->view('components/header');

            $this->load->view('user/changeinfo', $data);
            
            $this->load->view('components/footer');
        }

        public function changepassword() {
          
            $this->load->view('components/header');

            $this->load->view('user/changepassword');
            
            $this->load->view('components/footer');
        }
        
        public function updateinfo($id) {
            $tbl_user = 'users';
            $user = array (
                "EMAIL" => $_POST['email'],
                "FNAME" => $_POST['fname'],
                "ADDRESS" => $_POST['address'],
                "PNUMBER" => $_POST['pnumber'],
                "GASBOUND" => $_POST['gasbound']
            );
            $ch = curl_init();

            $url = "https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-gas-threshold/data";
            

            $data_array = array(
                
                "value"=>$_POST['gasbound']
                
            );

            $data = http_build_query($data_array);

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-AIO-Key: aio_Qaax13lEi6yxUNNWPypTfBQHv3L4'));


            $resp = curl_exec($ch);

            if($e = curl_error($ch)) {
                echo $e;
            }
            else {

                $decode = json_decode($resp);
            }

            curl_close($ch);
            $usermodel = $this->load->model('usermodel');
            $res = $usermodel->updatedata($tbl_user, $user, $id);
            // $this->load->view('registersuccess', []);
            header('Location: ' .BASE_URL.'/user');
        
        }

        public function updatepassword($id) {
            $tbl_user = 'users';
            if (isset($_POST)) {
                $oldpass = $_POST['oldpass'];
                $newpass = md5($_POST['newpass']);
            }
            if (md5($oldpass) != $_SESSION['pass']) {
                $_SESSION['notice'] = "Wrong password!!";
                header("location:" . BASE_URL .  "/user/changepassword");
            }
            
            $usermodel = $this->load->model('usermodel');
            
            $usermodel->updatepassword($tbl_user, $id, $newpass);
            header('Location: ' .BASE_URL.'/user');
        
        }

        public function editgasbound($id) {
            $user_table = 'users';
            if (isset($_POST)) {
                $gasbound = $_POST['gasbound'];
            }
            $admin_model = $this->load->model('adminmodel');
            $admin_model->updategasbound($user_table, $id, $gasbound);
            $datalight = 0;
            if (isset($_POST)) {
                if (!empty($_POST)) {
                    $datalight = $_POST['light_switch1'];
                }
            }

            //echo $datalight;
            
            $ch = curl_init();

            $url = "https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-gas-threshold/data";
            

            $data_array = array(
                
                "value"=>$gasbound
                
            );

            $data = http_build_query($data_array);

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-AIO-Key: aio_Qaax13lEi6yxUNNWPypTfBQHv3L4'));


            $resp = curl_exec($ch);

            if($e = curl_error($ch)) {
                echo $e;
            }
            else {

                $decode = json_decode($resp);
            }

            curl_close($ch);
            header('Location: ' .BASE_URL.'/admin/usermanagement');
            
        }

    }
?>