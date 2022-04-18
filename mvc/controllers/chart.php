<?php
    class chart extends Controller{
        public function __construct(){
            $data = array();
            parent::__construct();
        }

        public function gas(){
            $this->load->view('components/header');
            $this->load->view('chart/gaschart');
            $this->load->view('components/footer');
        }

        public function humid(){
            $this->load->view('components/header');
            $this->load->view('chart/humiditychart');
            $this->load->view('components/footer');
        }

        public function temp(){
            $this->load->view('components/header');
            $this->load->view('chart/tempchart');
            $this->load->view('components/footer');
        }


    }
    
?>