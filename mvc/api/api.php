<?php
class Api {
    public function __construct() {

    }

    public function light() {
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-2-color-led/data", false, stream_context_create($arrContextOptions));

        $result = json_decode($response); 
        // foreach($result as $key => $value) {
        //     $light = array(
        //         "DATAS" => $value->value,
        //         "TIMES" => $value->created_at,
        //         "DevID" => 2
        //     );
        // }

        return $result;
    }
    public function buzzer() {
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-buzzer/data", false, stream_context_create($arrContextOptions));

        $result = json_decode($response); 
        // foreach($result as $key => $value) {
        //     $light = array(
        //         "DATAS" => $value->value,
        //         "TIMES" => $value->created_at,
        //         "DevID" => 2
        //     );
        // }

        return $result;
    }

    public function humid() {
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-dht11-humid/data", false, stream_context_create($arrContextOptions));

        $result = json_decode($response); 
        // foreach($result as $key => $value) {
        //     $light = array(
        //         "DATAS" => $value->value,
        //         "TIMES" => $value->created_at,
        //         "DevID" => 2
        //     );
        // }

        return $result;
    }

    public function temperature() {
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-dht11-temp/data", false, stream_context_create($arrContextOptions));

        $result = json_decode($response); 
        // foreach($result as $key => $value) {
        //     $light = array(
        //         "DATAS" => $value->value,
        //         "TIMES" => $value->created_at,
        //         "DevID" => 2
        //     );
        // }

        return $result;
    }

    public function infrared() {
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-infrared-sensor/data", false, stream_context_create($arrContextOptions));

        $result = json_decode($response); 
        // foreach($result as $key => $value) {
        //     $light = array(
        //         "DATAS" => $value->value,
        //         "TIMES" => $value->created_at,
        //         "DevID" => 2
        //     );
        // }

        return $result;
    }

    public function gas() {
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-gas-sensor/data", false, stream_context_create($arrContextOptions));

        $result = json_decode($response); 
        // foreach($result as $key => $value) {
        //     $light = array(
        //         "DATAS" => $value->value,
        //         "TIMES" => $value->created_at,
        //         "DevID" => 2
        //     );
        // }

        return $result;
    }

}


?>