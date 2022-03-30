<?php
    class buzzerswitch extends Controller {
        public function __construct() {
            $data = array();
            parent::__construct();
        }

        public function switch()
        {
            $databuzzer = 3;
            if (isset($_POST)) {
                if (!empty($_POST)) {
                    $databuzzer = $_POST['buzzer_switch1'];
                }
            }

            echo $databuzzer;
            
            $ch = curl_init();

            $url = "https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-buzzer/data";
            

            $data_array = array(
                
                "value"=>$databuzzer,
                
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

            header('Location: ' .BASE_URL );

        }
    }
?>