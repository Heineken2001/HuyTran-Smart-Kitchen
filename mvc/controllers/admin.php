<?php
    class admin extends Controller {
        public function __construct() {
            $data = array();
            parent::__construct();
        }

        public function index() {
            return $this->homepage();
        }

        public function homepage() {

            $this->load->view('components/header');

            $this->load->view('cpanel/admin');
            
            $this->load->view('components/footer');
        }
        
        public function usermanagement() {
            $user_table = 'users';
            $admin_model = $this->load->model('adminmodel');
            $data['users'] = $admin_model->getdata($user_table);
            $this->load->view('components/header');

            $this->load->view('cpanel/usermng',$data);
            
            $this->load->view('components/footer');
        }

        public function editgasbound($id) {
            $user_table = 'users';
            $admin_model = $this->load->model('adminmodel');
            $admin_model->updategasbound($user_table, $id);
            
        }

        public function deleteuser($id) {
            $user_table = 'users';
            $admin_model = $this->load->model('adminmodel');
            $admin_model->deleteuser($user_table, $id);
            header('Location: ' .BASE_URL.'/admin/usermanagement');
            
        }
    }
?>