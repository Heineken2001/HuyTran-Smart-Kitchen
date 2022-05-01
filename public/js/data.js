$(document).ready(function() {
    async function light() {
        var temp = []
        $response = await fetch("https://io.adafruit.com/api/v2/nhungcoder_codon/feeds/do-an-da-nganh.co3109-2-color-led/data");
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
        $response = await fetch("https://io.adafruit.com/api/v2/nhungcoder_codon/feeds/do-an-da-nganh.co3109-buzzer/data");
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
        $response = await fetch("https://io.adafruit.com/api/v2/nhungcoder_codon/feeds/do-an-da-nganh.co3109-dht11-humid/data");
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
        $response = await fetch("https://io.adafruit.com/api/v2/nhungcoder_codon/feeds/do-an-da-nganh.co3109-dht11-temp/data");
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
        $response = await fetch("https://io.adafruit.com/api/v2/nhungcoder_codon/feeds/do-an-da-nganh.co3109-infrared-sensor/data");
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
        $response = await fetch("https://io.adafruit.com/api/v2/nhungcoder_codon/feeds/do-an-da-nganh.co3109-gas-sensor/data");
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

    async function lightmode() {
        var temp = []
        $response = await fetch("https://io.adafruit.com/api/v2/nhungcoder_codon/feeds/do-an-da-nganh.co3109-manual-led/data");
        // $response
        // .then(response => response.json())
        // .then(data => {(temp.push(data[0].value)); temp.push(data[0].created_at)})
        // .catch(function(error)  {
        //     console.log("Noooooo! Something error:");
        //     console.log(error);
        // });
        // return temp
        let data = await $response.json();
        //console.log(data[0].value)
        temp.push(data[0].value);
        return temp
    }

    // async function gaslimit() {
    //     var temp = []
    //     $response = await fetch("https://io.adafruit.com/api/v2/nhungcoder_codon/feeds/do-an-da-nganh.co3109-gas-threshold/data");
        
    //     let data = await $response.json();
    //     temp.push(data[0].value); 
    //     return temp
    // }

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
        mode = await lightmode();
        //bound = await gaslimit();

    //console.log(mode[0])
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
                light_mode: mode[0],
                //gas_bound: bound[0]
        
            },
            cache: false,
            success: function(response) {
                //console.log(response)
                response = JSON.parse(response)
                //console.log(response['buzzer_now'][0].DATAS)
                buzzer_now = response['buzzer_now'][0]
                humid_now = response['humid_now'][0]
                temperature_now = response['temperature_now'][0]
                infrared_now = response['infrared_now'][0]
                gas_now = response['gas_now'][0]
                light_now = response['light_now'][0]
                light_mode = response['light_mode'][0]
                if (infrared_now.DATAS == 1) $("#humantest").html("Human in room")
                else $("#humantest").html("No human")
                $("#gas_now").html("Nồng độ Gas hiện tại: "+gas_now.DATAS+ "ppm")
                $("#gas_alert").attr("data-value",((gas_now.DATAS/1023)*100))
                $("#checked_buzzer").attr("checked",(buzzer_now.DATAS == 2)?true:false)
                $("#buzzer_slider").attr("hidden", (buzzer_now.DATAS == 3)?true:false)
                $("#buzzer_slider").attr("disabled", (buzzer_now.DATAS == 3)?true:false)
                $("#buzzeronoff").attr("src",(buzzer_now.DATAS == 2)?"https://cdn-icons-png.flaticon.com/512/5936/5936468.png":"https://cdn-icons-png.flaticon.com/512/5936/5936529.png")
                $("#humid_now").html("Độ ẩm hiện tại: "+humid_now.DATAS+ "%")
                $("#humid_num").attr("data-value",gas_now.DATAS)
                $("#temp_now").html("Nhiệt độ hiện tại: "+temperature_now.DATAS+"°C")
                $("#temp_num").attr("data-value",temperature_now.DATAS)
                $("#checked_light").attr("checked",(light_now.DATAS == 1)?true:false)
                $("#squaredcheck").attr("checked",(light_mode.LIGHTMODE == 5)?true:false)
                $("#supportlight").attr("hidden", (light_mode.LIGHTMODE == 5)?true:false)
                $(".number1").html(`<h2>${gas_now.DATAS}<span>ppm</span></h2>`)
                $(".number2").html(`<h2>${humid_now.DATAS}<span>%</span></h2>`)
                $(".number3").html(`<h2>${temperature_now.DATAS}<span>°C</span></h2>`)
                console.log("ok")
                //$("#humantest").html()
                //$('#load').load(location.href+" #load");
                //location.reload();
                //$("#divSettings").html(this);
            }
            // success: function() {
            //     $('#load').load('http://localhost:8080/Doandanganh/');
            //     //location.reload();
            //     //$("#divSettings").html(this);
            // }
        });
        // console.log(Math.random());
        //console.log(typeof(mode[0]))
        
    },500);



});

