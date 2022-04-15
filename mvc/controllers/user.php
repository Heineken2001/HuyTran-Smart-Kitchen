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

            $file = $_FILES['image'];
            echo "<pre>";
            print_r($file);
            echo "</pre>";

            $img_name = $file['name'];
            $img_size = $file['size'];
            $tmp_name = $file['tmp_name'];
            $error = $file['error'];
            
            if ($error === 0) {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);   //jpeg
                $img_ex_lc = strtolower($img_ex);
                
                $allowed_exs = array("jpg", "png", "jpeg");
                if (in_array($img_ex, $allowed_exs)) {
                    $new_img_name = uniqid($_SESSION['user'], true). '.' . $img_ex_lc;
                    $img_upload_path = 'public/images/uploads/' . $new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path); 
                }
            }
            if ($new_img_name == "") $new_img_name = $_SESSION['image'];
            
            $_SESSION['image'] = $new_img_name;

            $user = array (
                "EMAIL" => $_POST['email'],
                "FNAME" => $_POST['fname'],
                "ADDRESS" => $_POST['address'],
                "PNUMBER" => $_POST['pnumber'],
                "GASBOUND" => $_POST['gasbound'],
                "IMAGE" => $new_img_name
            );
            if ($_POST['gasbound'] > $_SESSION['gasbound']) {
                $_SESSION['sent'] = 0;
            }

            $_SESSION['gasbound'] = $_POST['gasbound'];
            $ch = curl_init();

            $url = "https://io.adafruit.com/api/v2/nhungcoder_codon/feeds/do-an-da-nganh.co3109-gas-threshold/data";
            

            $data_array = array(
                
                "value"=>$_POST['gasbound']
                
            );

            $data = http_build_query($data_array);

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-AIO-Key: aio_DTiY04021PVfww6LzPtVDlterYMy'));


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

            


            // $file = $_FILES["image"];
 
            // // Uploading in "uplaods" folder
            // move_uploaded_file($file["tmp_name"], "public/images/uploads/" . $file["name"]);

            // print_r($_FILES['image']);

            // if ($error === 0) {
            //     $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            //     $img_ex_lc = strtolower($img_ex);

            //     $allowed_exs = array("jpg", "png", "jpeg");

            //     if (in_array($img_ex_lc, $allowed_exs)) {
            //         $new_img_name = uniqid("IMG-", true).'.'. $img_ex_lc;
            //         $img_upload_path = BASE_URL . "/public/images/avt/" . $new_img_name;
            //         move_uploaded_file($tmp_name, $img_upload_path);
            //     }
            // }

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

        public function reporterror() {
            $this->load->view('components/header');
            $this->load->view('user/report');
            $this->load->view('components/footer');

        }

        public function reportsent() {
            $tbl = 'reports';
            $content = strip_tags($_POST['reportcontent']);
            $user_model = $this->load->model('usermodel');
            $data = array(
                "TITLE" => $_POST['title'],
                "CONTENT" => $content,
                "ContID" => (int)$_SESSION['userid'],
                "SOLVED" => 0
            );
            $action = $user_model->insertdata($tbl, $data);
            $message['msg'] = 'Thanks for your report';
            header('Location: ' .BASE_URL.'/user/reporterror?msg='.urlencode(serialize($message)));
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

            $url = "https://io.adafruit.com/api/v2/nhungcoder_codon/feeds/do-an-da-nganh.co3109-gas-threshold/data";
            

            $data_array = array(
                
                "value"=>$gasbound
                
            );

            $data = http_build_query($data_array);

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-AIO-Key: aio_DTiY04021PVfww6LzPtVDlterYMy'));


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