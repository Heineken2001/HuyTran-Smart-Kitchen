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
            $this->load->view('home');
            $this->load->view('components/footer');
        }
        
        public function notfound() {
            echo '404 Not Found';
        }
    }
?>