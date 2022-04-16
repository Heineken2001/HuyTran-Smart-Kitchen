<?php
    class report extends Controller {
        public function __construct() {
            $data = array();
            parent::__construct();
        }

        public function details($id) {
            $user_table = 'users';
            $admin_model = $this->load->model('adminmodel');
            $data['users'] = $admin_model->getdata($user_table);
            $data['reports'] = $admin_model->getreportunsolved();
            $this->load->view('components/header', $data);

            $this->load->view('cpanel/reportdetail',$data);
            
            $this->load->view('components/footer');
        }
    }

?>