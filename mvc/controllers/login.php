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

    public function pushdata($value, $url) {
        $ch = curl_init();

            //$url = "https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-gas-threshold/data";
            

            $data_array = array(
                
                "value"=>$value
                
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
    }

    public function checklogin()
    {
        if (isset($_POST['username']) && isset($_POST['password']) && $_POST['username']!="" && $_POST['password']!="") {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            // $tbl_user = 'users';
            $usermodel = $this->load->model('usermodel');
            $userlist = $usermodel->checklogin($username, $password);
    
            if (sizeof($userlist)!=0) {
                $_SESSION['user'] = $username;
                
                $data = $usermodel->checkregis($username);
                foreach($data as $key => $value) {
                    $_SESSION['userid'] = $value['ContID'];
                    $_SESSION['pass'] = $value['PASS'];
                    $gasbound = $value['GASBOUND'];
                    $lightmode = $value['LIGHTMODE']; 
                }
                $urlgas = "https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-gas-threshold/data";
                $this->pushdata($gasbound, $urlgas);
                $urllightmode = "https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-manual-led/data";
                $this->pushdata($lightmode, $urllightmode);
            // $ch = curl_init();

            // $url = "https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-gas-threshold/data";
            

            // $data_array = array(
                
            //     "value"=>$gasbound
                
            // );

            // $data = http_build_query($data_array);

            // curl_setopt($ch, CURLOPT_URL, $url);
            // curl_setopt($ch, CURLOPT_POST, true);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-AIO-Key: aio_Qaax13lEi6yxUNNWPypTfBQHv3L4'));


            // $resp = curl_exec($ch);

            // if($e = curl_error($ch)) {
            //     echo $e;
            // }
            // else {

            //     $decode = json_decode($resp);
            // }

            // curl_close($ch);

            // $ch = curl_init();

            // $url = "https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-manual-led/data";
            

            // $data_array = array(
                
            //     "value"=>$lightmode
                
            // );

            // $data = http_build_query($data_array);

            // curl_setopt($ch, CURLOPT_URL, $url);
            // curl_setopt($ch, CURLOPT_POST, true);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-AIO-Key: aio_Qaax13lEi6yxUNNWPypTfBQHv3L4'));


            // $resp = curl_exec($ch);

            // if($e = curl_error($ch)) {
            //     echo $e;
            // }
            // else {

            //     $decode = json_decode($resp);
            // }

            // curl_close($ch);

            

            if ($username!="admin") header("Location: ".BASE_URL."/");
            else header("Location: ".BASE_URL."/admin");
            }
            else {
                $_SESSION['notice'] = 'Invalid username or password! Please check again';
                // die();
                header("location:" .BASE_URL. "/login");
            }
        }
        else {
            $_SESSION['notice'] = 'All field can not be empty!';
            header("location:" . BASE_URL . "/login");
        }


    }
}
?>