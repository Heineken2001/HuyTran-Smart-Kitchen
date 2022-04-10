$(document).ready(function() {
    async function light() {
        var temp = []
        $response = await fetch("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-2-color-led/data");
        // $response
        // .then(response => response.json())
        // .then(data => {(temp.push(data[0].value)); temp.push(data[0].created_at)})
        // .catch(function(error)  {
        //     console.log("Noooooo! Something error:");
        //     console.log(error);
        // });
        let data = await $response.json();
        temp.push(data[0].value); temp.push(data[0].created_at);
        return temp
    }
    async function buzzer() {
        var temp = []
        $response = await fetch("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-buzzer/data");
        // $response
        // .then(response => response.json())
        // .then(data => {(temp.push(data[0].value)); temp.push(data[0].created_at)})
        // .catch(function(error)  {
        //     console.log("Noooooo! Something error:");
        //     console.log(error);
        // });
        // return temp
        let data = await $response.json();
        temp.push(data[0].value); temp.push(data[0].created_at);
        return temp
    }
    
    async function humid() {
        var temp = []
        $response = await fetch("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-dht11-humid/data");
        // $response
        // .then(response => response.json())
        // .then(data => {(temp.push(data[0].value)); temp.push(data[0].created_at)})
        // .catch(function(error)  {
        //     console.log("Noooooo! Something error:");
        //     console.log(error);
        // });
        let data = await $response.json();
        temp.push(data[0].value); temp.push(data[0].created_at);
        return temp
    }
    
    async function temperature() {
        var temp = []
        $response = await fetch("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-dht11-temp/data");
        // $response
        // .then(response => response.json())
        // .then(data => {(temp.push(data[0].value)); temp.push(data[0].created_at)})
        // .catch(function(error)  {
        //     console.log("Noooooo! Something error:");
        //     console.log(error);
        // });
        // return temp
        let data = await $response.json();
        temp.push(data[0].value); temp.push(data[0].created_at);
        return temp
    }
    
    async function infrared() {
        var temp = []
        $response = await fetch("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-infrared-sensor/data");
        // $response
        // .then(response => response.json())
        // .then(data => {(temp.push(data[0].value)); temp.push(data[0].created_at)})
        // .catch(function(error)  {
        //     console.log("Noooooo! Something error:");
        //     console.log(error);
        // });
        // return temp
        let data = await $response.json();
        temp.push(data[0].value); temp.push(data[0].created_at);
        return temp
    }
    
    async function gas() {
        var temp = []
        $response = await fetch("https://io.adafruit.com/api/v2/taulabe/feeds/do-an-da-nganh.co3109-gas-sensor/data");
        // $response
        // .then(response => response.json())
        // .then(data => {(temp.push(data[0].value)); temp.push(data[0].created_at)})
        // .catch(function(error)  {
        //     console.log("Noooooo! Something error:");
        //     console.log(error);
        // });
        // return temp
        let data = await $response.json();
        temp.push(data[0].value); temp.push(data[0].created_at);
        return temp
    }

    // lightdata = light();
    // buzzerdata = buzzer();
    // humiddata = humid();
    // temperaturedata = temperature();
    // infrareddata = infrared();
    // gasdata = gas();


    //console.log(lightdata);
    // setInterval(function() {
    //     $.ajax({
    //         type: "POST",
    //         url: "http://localhost:8080/Doandanganh/index/addlightrecord",
    //         data: {
    //             light_status: lightdata[0],
    //             light_time: lightdata[1],
                
    //         },
    //         cache: false,
    //     });
         
    // },500);
    
    // setInterval(function() {
    //     $.ajax({
    //         type: "POST",
    //         url: "http://localhost:8080/Doandanganh/index/addgasrecord",
    //         data: {
    //             gas_status: gasdata[0],
    //             gas_time: gasdata[1],
    //         },
    //         cache: false,
    //     });
         
    // },60000);
    
    setInterval( async function() {
        lightdata = await light();
    buzzerdata =  await buzzer();
    humiddata = await humid();
    temperaturedata = await temperature();
    infrareddata = await infrared();
    gasdata = await gas();
    // console.log(lightdata[0])
    // console.log(humiddata[1])

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
                gas_status: gasdata[0],
                gas_time: gasdata[1],
        
            },
            cache: false,
            success: function() {
                location.reload();
                //$("#divSettings").html(this);
            }
        });
        // console.log(Math.random());
        // console.log(light())
    },800);



});

