<?php
    class index extends Controller {
        public function __construct() {
            $data = array();
            parent::__construct();
        }

        public function index() {
            return $this->homepage();
        }

        public function addrecord() {
            $tbl_records = 'records';
            $homemodel = $this->load->model('homemodel');
            $light = array(
                "DATAS" => $_POST['status'],
                "TIMES" => $_POST['time'],
                "DevID" => 2
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

            $data['gas_now'] = $this->api->getGasNow();

            $data['light_now'] = $this->api->getLightNow();

            $data['buzzer_now'] = $this->api->getBuzzerNow();

            $data['hooman_now'] = $this->api->getHoomanNow();

            $data['humid_now'] = $this->api->getHumidNow();

            $data['temp_now'] = $this->api->getTempNow();

            $this->load->view('home', $data);
            $this->load->view('components/footer');
        }
        
        public function notfound() {
            echo '404 Not Found';
        }
    }
?>