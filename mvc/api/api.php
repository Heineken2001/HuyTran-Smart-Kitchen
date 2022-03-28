<?php
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

$response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-2-color-led/data", false, stream_context_create($arrContextOptions));

$result = json_decode($response); 
// echo $result[1]->value.'fadjfldfkj';
// foreach($result as $key => $value) {
//     echo $value->value.'<br/>';
//     echo $value->created_at.'<br/>';
// }

?>