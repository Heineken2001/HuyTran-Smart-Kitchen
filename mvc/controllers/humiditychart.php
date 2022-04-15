<?php
    class humiditychart extends Controller{
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->load->view('components/header');
            $this->load->view('chart/humiditychart');
            $this->load->view('components/footer');
        }


    }
    
?>