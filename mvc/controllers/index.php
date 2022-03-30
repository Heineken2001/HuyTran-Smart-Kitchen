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
            
            

            $data['records'] = $homemodel->getdata('records');

            $data['gas_now'] = $this->api->getGasNow();

            $data['light_now'] = $this->api->getLightNow();

            $this->load->view('home', $data);
            $this->load->view('components/footer');
        }
        
        public function notfound() {
            echo '404 Not Found';
        }
    }
?>