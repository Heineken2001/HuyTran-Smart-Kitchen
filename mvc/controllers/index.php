<?php
    class index extends Controller {
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
                    return $this->notfound();
                }
                else return $this->loginpage();
            }

            // return $this->homepage();
        }

        public function loginpage()
        {
            $this->load->view('components/header');
            $this->load->view('login');
            $this->load->view('components/footer');
        }

        public function addrecord() {
            $tbl_records = 'records';
            $homemodel = $this->load->model('homemodel');

            $recordmodel = $this->load->model('recordnowmodel');

            $data['buzzer_now'] = $recordmodel->getBuzzerdata();
    
            foreach ($data['buzzer_now'] as $key => $value) {
                $buzzer_now1 = $value['TIMES'];
            }
            if (strcmp($buzzer_now1,$_POST['buzzer_time']) != 0) {
                $buzzer = array(
                    "DATAS" => $_POST['buzzer_status'],
                    "TIMES" => $_POST['buzzer_time'],
                    "DevID" => 3,
                    "ContID" => (int)$_SESSION['userid']
                );
                $res = $homemodel->insertdata($tbl_records, $buzzer);
            }

            $data['humid_now'] = $recordmodel->getHumiddata();
            foreach ($data['humid_now'] as $key => $value) {
                $humid_now1 = $value['TIMES'];
            }
            if (strcmp($humid_now1,$_POST['humid_time']) != 0) {
                $humid = array(
                    "DATAS" => $_POST['humid_status'],
                    "TIMES" => $_POST['humid_time'],
                    "DevID" => 4,
                    "ContID" => (int)$_SESSION['userid']
                );
                $res = $homemodel->insertdata($tbl_records, $humid);
            }

            $data['temperature_now'] = $recordmodel->getTempdata();
            foreach ($data['temperature_now'] as $key => $value) {
                $temperature_now1 = $value['TIMES'];
            }
            if (strcmp($temperature_now1,$_POST['temperature_time']) != 0) {
                $temperature = array(
                    "DATAS" => $_POST['temperature_status'],
                    "TIMES" => $_POST['temperature_time'],
                    "DevID" => 5,
                    "ContID" => (int)$_SESSION['userid']
                );
                $res = $homemodel->insertdata($tbl_records, $temperature);
            }

            $data['infrared_now'] = $recordmodel->getHoomandata();
            foreach ($data['infrared_now'] as $key => $value) {
                $infrared_now1 = $value['TIMES'];
            }
            if (strcmp($infrared_now1,$_POST['infrared_time']) != 0) {
                $infrared = array(
                    "DATAS" => $_POST['infrared_status'],
                    "TIMES" => $_POST['infrared_time'],
                    "DevID" => 6,
                    "ContID" => (int)$_SESSION['userid']
                );
                $res = $homemodel->insertdata($tbl_records, $infrared);
            }

            $data['gas_now'] = $recordmodel->getGasdata();
            foreach ($data['gas_now'] as $key => $value) {
                $gas_now1 = $value['TIMES'];
            }
            if (strcmp($gas_now1,$_POST['gas_time']) != 0) {
                $gas = array(
                    "DATAS" => $_POST['gas_status'],
                    "TIMES" => $_POST['gas_time'],
                    "DevID" => 7,
                    "ContID" => (int)$_SESSION['userid']
                );
                
                $res = $homemodel->insertdata($tbl_records, $gas);
            }

            
            $data['light_now'] = $recordmodel->getLightdata();
            foreach ($data['light_now'] as $key => $value) {
                $light_now1 = $value['TIMES'];
            }
            if (strcmp($light_now1,$_POST['light_time']) != 0) {
                $light = array(
                    "DATAS" => $_POST['light_status'],
                    "TIMES" => $_POST['light_time'],
                    "DevID" => 2,
                    "ContID" => (int)$_SESSION['userid']
                );
                $res = $homemodel->insertdata($tbl_records, $light);
            }

            $data['light_mode'] = $recordmodel->getLightmode($_SESSION['userid']);
            foreach ($data['light_mode'] as $key => $value) {
                $light_mode = $value['LIGHTMODE'];
            }
            if ($light_mode != (int)($_POST['light_mode'])) {
                $light = (int)($_POST['light_mode']);
             
                $res = $homemodel->updatelightmode($_SESSION['userid'], $light);
            }
        }

        public function addgasrecord() {
            $tbl_records = 'records';
            $homemodel = $this->load->model('homemodel');
            $gas = array(
                "DATAS" => $_POST['gas_status'],
                "TIMES" => $_POST['gas_time'],
                "DevID" => 7,
                "ContID" => (int)$_SESSION['userid']
            );
            
            $res = $homemodel->insertdata($tbl_records, $gas);
        }

        public function addlightrecord() {
            $tbl_records = 'records';
            $homemodel = $this->load->model('homemodel');
            $recordmodel = $this->load->model('recordnowmodel');
            $data['light_now'] = $recordmodel->getLightdata();
            foreach ($data['light_now'] as $key => $value) {
                $light_now1 = $value['TIMES'];
            }
            if (strcmp($light_now1,$_POST['light_time']) == 0) return;
            $light = array(
                "DATAS" => $_POST['light_status'],
                "TIMES" => $_POST['light_time'],
                "DevID" => 2,
                "ContID" => (int)$_SESSION['userid']
            );
            $res = $homemodel->insertdata($tbl_records, $light);
        }

        public function homepage() {

            $tbl_records = 'records';
            $this->load->view('components/header');
            $homemodel = $this->load->model('homemodel');
            
            // $data = $this->api->light();
                // $light = array(
                //             "DATAS" => $_POST['status'],
                //             "TIMES" => $_POST['created_at'],
                //             "DevID" => 2
                //         );
                // $res = $homemodel->insertdata($tbl_records, $light);

            // $data1 = $this->api->buzzer();
            //     $buzzer = array(
            //                 "DATAS" => $data1[0]->value,
            //                 "TIMES" => $data1[0]->created_at,
            //                 "DevID" => 3
            //             );
            //     $res = $homemodel->insertdata($tbl_records, $buzzer);

            // $data2 = $this->api->humid();
            //     $humid = array(
            //                 "DATAS" => $data2[0]->value,
            //                 "TIMES" => $data2[0]->created_at,
            //                 "DevID" => 4
            //             );
            //     $res = $homemodel->insertdata($tbl_records, $humid);

            // $data3 = $this->api->temperature();
            //     $temp = array(
            //                 "DATAS" => $data3[0]->value,
            //                 "TIMES" => $data3[0]->created_at,
            //                 "DevID" => 5
            //             );
            //     $res = $homemodel->insertdata($tbl_records, $temp);

            // $data4 = $this->api->infrared();
            //     $infrared = array(
            //                 "DATAS" => $data4[0]->value,
            //                 "TIMES" => $data4[0]->created_at,
            //                 "DevID" => 6
            //             );
            //     $res = $homemodel->insertdata($tbl_records, $infrared);

            
            // $data5 = $this->api->gas();
            //     $gas = array(
            //         "DATAS" => $data5[0]->value,
            //         "TIMES" => $data5[0]->created_at,
            //         "DevID" => 7
            //     );
            //     $res = $homemodel->insertdata($tbl_records, $gas);

            //$data['records'] = $homemodel->getdata('records');

            
            $recordmodel = $this->load->model('recordnowmodel');

            $data['gas_now'] = $recordmodel->getGasdata();
            
            $data['light_now'] = $recordmodel->getLightdata();
            
            $data['gas_now'] = $recordmodel->getGasdata();
            // $data['light_now'] = $recordmodel[0];

            $data['buzzer_now'] = $recordmodel->getBuzzerdata();

            $data['humid_now'] = $recordmodel->getHumiddata();

            $data['hooman_now'] = $recordmodel->getHoomandata();

            $data['temp_now'] = $recordmodel->getTempdata();

            $data['light_mode'] = $recordmodel->getLightmode($_SESSION['userid']);

            foreach($data['gas_now'] as $key => $value) {
                $gas_now = $value['DATAS'];
            }   
            
            $this->load->view('home', $data);

            if ($gas_now > $_SESSION['gasbound'] && $_SESSION['sent'] == 0) {
                $_SESSION['sent'] = 1;
                include_once './mail/sendgasnotice.php';
            }

            
            $this->load->view('components/footer');
        }
        
        public function notfound() {
            echo '404 Not Found';
        }
    }
?>