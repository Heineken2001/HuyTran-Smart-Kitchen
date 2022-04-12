<?php
    class lightswitch extends Controller {
        public function __construct() {
            $data = array();
            parent::__construct();
        }

        public function switch()
        {
            $datalight = 0;
            if (isset($_POST)) {
                if (!empty($_POST)) {
                    $datalight = $_POST['light_switch1'];
                }
            }

            //echo $datalight;
            
            $ch = curl_init();

            $url = "https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-2-color-led/data";
            

            $data_array = array(
                
                "value"=>$datalight
                
            );

            $data = http_build_query($data_array);

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-AIO-Key: aio_Qaax13lEi6yxUNNWPypTfBQHv3L4'));


            $resp = curl_exec($ch);

            if($e = curl_error($ch)) {
                echo $e;
            }
            else {

                $decode = json_decode($resp);
                // print_r($decode);
                // foreach ($decode as $key => $value) {
                //     echo $key . ": ". $value . "<br>";
                // }
            }

            curl_close($ch);
            // $tbl_records = 'records';
            // $homemodel = $this->load->model('homemodel');
            // $arrContextOptions=array(
            //     "ssl"=>array(
            //         "verify_peer"=>false,
            //         "verify_peer_name"=>false,
            //     ),
            // );  
            // $response = file_get_contents($url, false, stream_context_create($arrContextOptions));
    
            // $result = json_decode($response); 
            // $light = array(
            //     "DATAS" => $result[0]->value,
            //     "TIMES" => $result[0]->created_at,
            //     "DevID" => 2
            // );
            // $res = $homemodel->insertdata($tbl_records, $light);
            //header('Location: ' .BASE_URL );

        }

        public function mode()
        {
            $mode = 0;
            if (isset($_POST)) {
                if (!empty($_POST)) {
                    $mode = $_POST['mode'];
                }
            }

            //echo $mode;
            
            $ch = curl_init();

            $url = "https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-manual-led/data";
            

            $data_array = array(
                
                "value"=>$mode
                
            );

            $data = http_build_query($data_array);

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-AIO-Key: aio_Qaax13lEi6yxUNNWPypTfBQHv3L4'));


            $resp = curl_exec($ch);

            if($e = curl_error($ch)) {
                echo $e;
            }
            else {

                $decode = json_decode($resp);
                
            }

            curl_close($ch);
            

        }
    }
?>