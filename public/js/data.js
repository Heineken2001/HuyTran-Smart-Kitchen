$(document).ready(function() {
 
    function light() {
        var temp = []
        $response = fetch("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-2-color-led/data");
        $response
        .then(response => response.json())
        .then(data => {(temp.push(data[0].value)); temp.push(data[0].created_at)})
        .catch(function(error)  {
            console.log("Noooooo! Something error:");
            // Network Error!
            console.log(error);
        });
        return temp
    }
    // function buzzer() {
    //     $arrContextOptions=array(
    //         "ssl"=>array(
    //             "verify_peer"=>false,
    //             "verify_peer_name"=>false,
    //         ),
    //     );  
    //     $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-buzzer/data", false, stream_context_create($arrContextOptions));

    //     $result = json_decode($response); 
    //     // foreach($result as $key => $value) {
    //     //     $light = array(
    //     //         "DATAS" => $value->value,
    //     //         "TIMES" => $value->created_at,
    //     //         "DevID" => 2
    //     //     );
    //     // }

    //     return $result;
    // }

    // function humid() {
    //     $arrContextOptions=array(
    //         "ssl"=>array(
    //             "verify_peer"=>false,
    //             "verify_peer_name"=>false,
    //         ),
    //     );  
    //     $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-dht11-humid/data", false, stream_context_create($arrContextOptions));

    //     $result = json_decode($response); 
    //     // foreach($result as $key => $value) {
    //     //     $light = array(
    //     //         "DATAS" => $value->value,
    //     //         "TIMES" => $value->created_at,
    //     //         "DevID" => 2
    //     //     );
    //     // }

    //     return $result;
    // }

    // function temperature() {
    //     $arrContextOptions=array(
    //         "ssl"=>array(
    //             "verify_peer"=>false,
    //             "verify_peer_name"=>false,
    //         ),
    //     );  
    //     $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-dht11-temp/data", false, stream_context_create($arrContextOptions));

    //     $result = json_decode($response); 
    //     // foreach($result as $key => $value) {
    //     //     $light = array(
    //     //         "DATAS" => $value->value,
    //     //         "TIMES" => $value->created_at,
    //     //         "DevID" => 2
    //     //     );
    //     // }

    //     return $result;
    // }

    // function infrared() {
    //     $arrContextOptions=array(
    //         "ssl"=>array(
    //             "verify_peer"=>false,
    //             "verify_peer_name"=>false,
    //         ),
    //     );  
    //     $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-infrared-sensor/data", false, stream_context_create($arrContextOptions));

    //     $result = json_decode($response); 
    //     // foreach($result as $key => $value) {
    //     //     $light = array(
    //     //         "DATAS" => $value->value,
    //     //         "TIMES" => $value->created_at,
    //     //         "DevID" => 2
    //     //     );
    //     // }

    //     return $result;
    // }

    // function gas() {
    //     $arrContextOptions=array(
    //         "ssl"=>array(
    //             "verify_peer"=>false,
    //             "verify_peer_name"=>false,
    //         ),
    //     );  
    //     $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-gas-sensor/data", false, stream_context_create($arrContextOptions));

    //     $result = json_decode($response); 
    //     // foreach($result as $key => $value) {
    //     //     $light = array(
    //     //         "DATAS" => $value->value,
    //     //         "TIMES" => $value->created_at,
    //     //         "DevID" => 2
    //     //     );
    //     // }
    //     return $result;
    // }

    // function getGasNow()
    // {
    //     $arrContextOptions=array(
    //         "ssl"=>array(
    //             "verify_peer"=>false,
    //             "verify_peer_name"=>false,
    //         ),
    //     );  
    //     $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-gas-sensor/data/", false, stream_context_create($arrContextOptions));

    //     $result = json_decode($response); 

    //     $gas_now = $result[0]->value;

    //     return $gas_now;

    // }

    // function getLightNow()
    // {
    //     $arrContextOptions=array(
    //         "ssl"=>array(
    //             "verify_peer"=>false,
    //             "verify_peer_name"=>false,
    //         ),
    //     );  
    //     $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-2-color-led/data", false, stream_context_create($arrContextOptions));

    //     $result = json_decode($response); 

    //     $light_now = $result[0]->value;

    //     return $light_now;
    // }

    // function getBuzzerNow()
    // {
    //     $arrContextOptions=array(
    //         "ssl"=>array(
    //             "verify_peer"=>false,
    //             "verify_peer_name"=>false,
    //         ),
    //     );  
    //     $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-buzzer/data", false, stream_context_create($arrContextOptions));

    //     $result = json_decode($response); 

    //     $buzzer_now = $result[0]->value;

    //     return $buzzer_now;
    // }

    // function getHoomanNow()
    // {
    //     $arrContextOptions=array(
    //         "ssl"=>array(
    //             "verify_peer"=>false,
    //             "verify_peer_name"=>false,
    //         ),
    //     );  
    //     $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-infrared-sensor/data", false, stream_context_create($arrContextOptions));

    //     $result = json_decode($response); 

    //     $hooman_now = $result[0]->value;

    //     return $hooman_now;
    // }

    // function getHumidNow()
    // {
    //     $arrContextOptions=array(
    //         "ssl"=>array(
    //             "verify_peer"=>false,
    //             "verify_peer_name"=>false,
    //         ),
    //     );  
    //     $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-dht11-humid/data", false, stream_context_create($arrContextOptions));

    //     $result = json_decode($response); 

    //     $humid_now = $result[0]->value;

    //     return $humid_now;
    // }

    // function getTempNow()
    // {
    //     $arrContextOptions=array(
    //         "ssl"=>array(
    //             "verify_peer"=>false,
    //             "verify_peer_name"=>false,
    //         ),
    //     );  
    //     $response = file_get_contents("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-dht11-temp/data", false, stream_context_create($arrContextOptions));

    //     $result = json_decode($response); 

    //     $temp_now = $result[0]->value;

    //     return $temp_now;
    // }
    lightdata = light();
        console.log(lightdata);
    
    setInterval(function() {
        //console.log(light());
        // var firstName = $("#firstName").val();
        // var lastName = $("#lastName").val();
        // var email = $("#email").val();
        // var message = $("#message").val();

        // if(firstName==''||lastName==''||email==''||message=='') {
        //     alert("Please fill all fields.");
        //     return false;
        // }
        
        $.ajax({
            type: "POST",
            url: "http://localhost:8080/Doandanganh/index/addrecord",
            data: {
                status: lightdata[0],
                time: lightdata[1],
            },
            cache: false,
            // success: function(data) {
            //     alert(data);
            // },
            // error: function(xhr, status, error) {
            //     console.error(xhr);
            // }
        });
         
    },180000);

});

