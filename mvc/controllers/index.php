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
            $json_light_url = "https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-2-color-led/data";
            $json_light = file_get_contents($json_light_url);
            $light_result = json_decode($json_light);
            // ---------------------------



            // Header
            $this->load->view('components/header');


            // Body
            $this->load->view('home', [
                "light_now" => $light_result[0]->value,
                
            ]);


            // Footer
            $this->load->view('components/footer');


            // foreach ($result as $key => $val) {
            //     echo $val -> value; echo "\n";
            // } 
 
        }
        
        public function notfound() {
            echo '404 Not Found';
        }
    }
?>