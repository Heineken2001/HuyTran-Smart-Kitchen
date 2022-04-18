<?php
    class chart extends Controller{
        public function __construct(){
            $data = array();
            parent::__construct();
        }

        public function gas(){
            $id = $_SESSION['userid'];
            $devid = 7;
            $chart_model = $this->load->model('chart');
            $data['gas'] = $chart_model->getrecord($id, $devid);
            $this->load->view('components/header');
            $this->load->view('chart/gaschart', $data);
            $this->load->view('components/footer');
        }

        public function humid(){
            $id = $_SESSION['userid'];
            $devid = 4;
            $chart_model = $this->load->model('chart');
            $data['humid'] = $chart_model->getrecord($id, $devid);
            $this->load->view('components/header');
            $this->load->view('chart/humiditychart');
            $this->load->view('components/footer');
        }

        public function temp(){
            $id = $_SESSION['userid'];
            $devid = 5;
            $chart_model = $this->load->model('chart');
            $data['temp'] = $chart_model->getrecord($id, $devid);
            $this->load->view('components/header');
            $this->load->view('chart/tempchart');
            $this->load->view('components/footer');
        }


    }
    
?>