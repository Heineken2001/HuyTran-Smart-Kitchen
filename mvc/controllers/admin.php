<?php
    class admin extends Controller {
        public function __construct() {
            $data = array();
            parent::__construct();
        }

        public function index() {
            if (isset($_SESSION['user'])) {
                if ($_SESSION['user'] == 'admin') {
                    return $this->homepage();
                }
            }
            header('Location: ' .BASE_URL.'/login');
        }

        public function homepage() {
            $user_table = 'users';
            $admin_model = $this->load->model('adminmodel');
            $data['users'] = $admin_model->getdata($user_table);
            $data['reports'] = $admin_model->getreportunsolved();
            $this->load->view('components/header',$data);

            $this->load->view('cpanel/admin',$data);
            
            $this->load->view('components/footer');
        }
        
        public function usermanagement() {
            $user_table = 'users';
            $admin_model = $this->load->model('adminmodel');
            $data['users'] = $admin_model->getdata($user_table);
            $data['reports'] = $admin_model->getreportunsolved();
            $this->load->view('components/header', $data);

            $this->load->view('cpanel/usermng',$data);
            
            $this->load->view('components/footer');
        }


        public function notifications() {
            $user_table = 'users';
            $admin_model = $this->load->model('adminmodel');
            $data['users'] = $admin_model->getdata($user_table);
            $data['reports'] = $admin_model->getreportunsolved();
            $data['all'] = $admin_model->getallreport();
            $this->load->view('components/header', $data);

            $this->load->view('cpanel/userreports',$data);
            
            $this->load->view('components/footer');
        }

        public function details($id) {
            $user_table = 'users';
            $admin_model = $this->load->model('adminmodel');
            $data['users'] = $admin_model->getdata($user_table);
            $data['reports'] = $admin_model->getreportunsolved();
            $data['details'] = $admin_model->getdreportdetails($id);
            $this->load->view('components/header', $data);

            $this->load->view('cpanel/reportdetail',$data);
            
            $this->load->view('components/footer');
        }

        public function solved($id) {
            $admin_model = $this->load->model('adminmodel');
            $admin_model->updatereport($id);
            header('Location: ' .BASE_URL.'/admin/notifications');
        }

        public function userinfo($id) {
            $user_table = 'users';
            $admin_model = $this->load->model('adminmodel');
            $data['users'] = $admin_model->getdata($user_table);
            $data['reports'] = $admin_model->getreportunsolved();
            $user_model = $this->load->model('usermodel');
            $user_id = $id;
            $data['user'] = $user_model->getdatabyid($user_table, $user_id);
            $this->load->view('components/header', $data);

            $this->load->view('cpanel/userinfo', $data);
            
            $this->load->view('components/footer');
        }

        public function editgasbound($id) {
            $user_table = 'users';
            if (isset($_POST)) {
                $gasbound = $_POST['gasbound'];
            }
            $admin_model = $this->load->model('adminmodel');
            $admin_model->updategasbound($user_table, $id, $gasbound);
            $datalight = 0;
            if (isset($_POST)) {
                if (!empty($_POST)) {
                    $datalight = $_POST['light_switch1'];
                }
            }

            //echo $datalight;
            
            $ch = curl_init();

            $url = "https://io.adafruit.com/api/v2/nhungcoder_codon/feeds/do-an-da-nganh.co3109-gas-threshold/data";
            

            $data_array = array(
                
                "value"=>$gasbound
                
            );

            $data = http_build_query($data_array);

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-AIO-Key: aio_DTiY04021PVfww6LzPtVDlterYMy'));


            $resp = curl_exec($ch);

            if($e = curl_error($ch)) {
                echo $e;
            }
            else {

                $decode = json_decode($resp);
            }

            curl_close($ch);
            header('Location: ' .BASE_URL.'/admin/usermanagement');
            
        }

        public function deleteuser($id) {
            $user_table = 'users';
            $admin_model = $this->load->model('adminmodel');
            $admin_model->deleteuser($user_table, $id);
            header('Location: ' .BASE_URL.'/admin/usermanagement');
            
        }
    }
?>