<?php
    class summaryreport extends Controller{
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index(){
            $id = $_SESSION['userid'];
            $summaryreport_model = $this->load->model('summaryreportmodel');
            $data['all'] = $summaryreport_model->getallrecord($id);
            $this->load->view('components/header');
            $this->load->view('summaryreport', $data);
            $this->load->view('components/footer');
        }


    }
    
?>