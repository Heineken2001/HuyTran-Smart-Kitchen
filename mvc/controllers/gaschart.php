<?php
    class gaschart extends Controller{
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->load->view('components/header');
            $this->load->view('gaschart');
            $this->load->view('components/footer');
        }


    }
    
?>