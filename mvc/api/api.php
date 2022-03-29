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
}


?>