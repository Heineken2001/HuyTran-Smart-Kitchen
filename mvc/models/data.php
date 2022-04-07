<?php
class data extends Model {

    function light() {
        $ch = curl_init();

            $url = "https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-2-color-led/data/last";


            curl_setopt($ch, CURLOPT_URL, $url);
            // curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-AIO-Key: aio_Qaax13lEi6yxUNNWPypTfBQHv3L4'));


            $resp = curl_exec($ch);

            if($e = curl_error($ch)) {
                echo $e;
            }
            else {

                $decode = json_decode($resp);
                print_r($decode);
                // foreach ($decode as $key => $value) {
                //     echo $key . ": ". $value . "<br>";
                // }
                echo $decode->value;
            }

            curl_close($ch);
    }
}
?>

<script>
    // setInterval(function() {
    //     $.ajax({
    //         type: "POST",
    //         url: "http://localhost:8080/Doandanganh/index/addrecord",
    //         data: {
    //             light_status: lightdata[0],
    //             light_time: lightdata[1],
    //             buzzer_status: buzzerdata[0],
    //             buzzer_time: buzzerdata[1],
    //             humid_status: humiddata[0],
    //             humid_time: humiddata[1],
    //             temperature_status: temperaturedata[0],
    //             temperature_time: temperaturedata[1],
    //             infrared_status: infrareddata[0],
    //             infrared_time: infrareddata[1],
    //             gas_status: gasdata[0],
    //             gas_time: gasdata[1],
        
    //         },
    //         cache: false,
    //     });
         
    // },1000);
</script>