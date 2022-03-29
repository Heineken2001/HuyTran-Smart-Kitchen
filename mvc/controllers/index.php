<?php
    class index extends Controller {
        public function __construct() {
            $data = array();
            parent::__construct();
        }

        public function index() {
            return $this->homepage();
        }

        public function homepage() {
            $tbl_records = 'records';
            $this->load->view('components/header');
            $homemodel = $this->load->model('homemodel');
            
            $data = $this->api->light();
            foreach ($data as $key => $value) {
                $light = array(
                            "DATAS" => $value->value,
                            "TIMES" => $value->created_at,
                            "DevID" => 2
                        );
                $res = $homemodel->insertdata($tbl_records, $light);
            }

            $data1 = $this->api->buzzer();
            foreach ($data1 as $key => $value) {
                $buzzer = array(
                            "DATAS" => $value->value,
                            "TIMES" => $value->created_at,
                            "DevID" => 3
                        );
                $res = $homemodel->insertdata($tbl_records, $buzzer);
            }

            $data2 = $this->api->humid();
            foreach ($data2 as $key => $value) {
                $humid = array(
                            "DATAS" => $value->value,
                            "TIMES" => $value->created_at,
                            "DevID" => 4
                        );
                $res = $homemodel->insertdata($tbl_records, $humid);
            }

            $data3 = $this->api->temperature();
            foreach ($data3 as $key => $value) {
                $temp = array(
                            "DATAS" => $value->value,
                            "TIMES" => $value->created_at,
                            "DevID" => 5
                        );
                $res = $homemodel->insertdata($tbl_records, $temp);
            }

            $data4 = $this->api->infrared();
            foreach ($data4 as $key => $value) {
                $infrared = array(
                            "DATAS" => $value->value,
                            "TIMES" => $value->created_at,
                            "DevID" => 6
                        );
                $res = $homemodel->insertdata($tbl_records, $infrared);
            }

            $this->load->view('home');
            $this->load->view('components/footer');

            $data5 = $this->api->gas();
            foreach ($data5 as $key => $value) {
                $gas = array(
                            "DATAS" => $value->value,
                            "TIMES" => $value->created_at,
                            "DevID" => 7
                        );
                $res = $homemodel->insertdata($tbl_records, $gas);
            }
        }
        
        public function notfound() {
            echo '404 Not Found';
        }
    }
?>