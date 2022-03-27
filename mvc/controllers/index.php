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
            $tbl = 'product';
            $this->load->view('components/header');
            $homemodel = $this->load->model('homemodel');
            $data['category'] = $homemodel->category($tbl);
            $this->load->view('home', $data);
            $this->load->view('components/footer');
        }
        
        public function notfound() {
            echo '404 Not Found';
        }
    }
?>