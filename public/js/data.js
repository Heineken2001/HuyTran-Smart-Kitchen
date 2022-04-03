$(document).ready(function() {
    function light() {
        var temp = []
        $response = fetch("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-2-color-led/data");
        $response
        .then(response => response.json())
        .then(data => {(temp.push(data[0].value)); temp.push(data[0].created_at)})
        .catch(function(error)  {
            console.log("Noooooo! Something error:");
            console.log(error);
        });
        return temp
    }
    function buzzer() {
        var temp = []
        $response = fetch("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-buzzer/data");
        $response
        .then(response => response.json())
        .then(data => {(temp.push(data[0].value)); temp.push(data[0].created_at)})
        .catch(function(error)  {
            console.log("Noooooo! Something error:");
            console.log(error);
        });
        return temp
    }
    
    function humid() {
        var temp = []
        $response = fetch("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-dht11-humid/data");
        $response
        .then(response => response.json())
        .then(data => {(temp.push(data[0].value)); temp.push(data[0].created_at)})
        .catch(function(error)  {
            console.log("Noooooo! Something error:");
            console.log(error);
        });
        return temp
    }
    
    function temperature() {
        var temp = []
        $response = fetch("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-dht11-temp/data");
        $response
        .then(response => response.json())
        .then(data => {(temp.push(data[0].value)); temp.push(data[0].created_at)})
        .catch(function(error)  {
            console.log("Noooooo! Something error:");
            console.log(error);
        });
        return temp
    }
    
    function infrared() {
        var temp = []
        $response = fetch("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-infrared-sensor/data");
        $response
        .then(response => response.json())
        .then(data => {(temp.push(data[0].value)); temp.push(data[0].created_at)})
        .catch(function(error)  {
            console.log("Noooooo! Something error:");
            console.log(error);
        });
        return temp
    }
    
    function gas() {
        var temp = []
        $response = fetch("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-gas-sensor/data");
        $response
        .then(response => response.json())
        .then(data => {(temp.push(data[0].value)); temp.push(data[0].created_at)})
        .catch(function(error)  {
            console.log("Noooooo! Something error:");
            console.log(error);
        });
        return temp
    }

    lightdata = light();
    buzzerdata = buzzer();
    humiddata = humid();
    temperaturedata = temperature();
    infrareddata = infrared();
    gasdata = gas();


    console.log(lightdata);
    
    setInterval(function() {
        $.ajax({
            type: "POST",
            url: "http://localhost:8080/Doandanganh/index/addrecord",
            data: {
                light_status: lightdata[0],
                light_time: lightdata[1],
                buzzer_status: buzzerdata[0],
                buzzer_time: buzzerdata[1],
                humid_status: humiddata[0],
                humid_time: humiddata[1],
                temperature_status: temperaturedata[0],
                temperature_time: temperaturedata[1],
                infrared_status: infrareddata[0],
                infrared_time: infrareddata[1],
            },
            cache: false,
        });
         
    },6000);

    setInterval(function() {
        $.ajax({
            type: "POST",
            url: "http://localhost:8080/Doandanganh/index/addgasrecord",
            data: {
                gas_status: gasdata[0],
                gas_time: gasdata[1],
            },
            cache: false,
        });
         
    },5000);

});

