<?php
    class tempchart extends Controller{
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->load->view('components/header');
            $this->load->view('tempchart');
            $this->load->view('components/footer');
        }


    }
    
?>