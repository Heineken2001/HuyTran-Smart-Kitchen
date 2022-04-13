<?php
    foreach ($light_now as $key => $value) {
        $light_now1 = $value['DATAS'];
    }
    foreach ($buzzer_now as $key => $value) {
        $buzzer_now1 = $value['DATAS'];
    }
    foreach ($humid_now as $key => $value) {
        $humid_now1 = $value['DATAS'];
    }
    foreach ($hooman_now as $key => $value) {
        $hooman_now1 = $value['DATAS'];
    }
    foreach ($temp_now as $key => $value) {
        $temp_now1 = $value['DATAS'];
    }
    foreach ($gas_now as $key => $value) {
        $gas_now1 = $value['DATAS'];
    }
    foreach ($light_mode as $key => $value) {
        $light_mode1 = $value['LIGHTMODE'];
    }
    //echo gettype($light_mode1);
    //echo $_SESSION['userid'];
?>
<style>
    .squaredcheck {
    width: 210px;
    position: relative;
    margin: 20px auto;
    }
    .squaredcheck label {
    width: 16px;
    height: 16px;
    cursor: pointer;
    position: absolute;
    top: 5px;
    left: 0;
    background: #66c0ff;
    border-radius: 4px;
    }
    .squaredcheck label:after {
    content: '';
    width: 10px;
    height: 5px;
    position: absolute;
    top: 4px;
    left: 3px;
    border: 2px solid #fff;
    border-top: none;
    border-right: none;
    background: transparent;
    opacity: 0;
    transform: rotate(-45deg);
    }
    .squaredcheck label:hover::after {
    opacity: 0.3;
    }
    .squaredcheck span {
    position: absolute;
    width: 300px;
    left: 30px;
    }
    .squaredcheck input[type=checkbox] {
    visibility: hidden;
    }
    .squaredcheck input[type=checkbox]:checked + label {
    background: #0096ff;
    }
    .squaredcheck input[type=checkbox]:checked + label:after {
    opacity: 1;
    }
    .squaredcheck input[type=checkbox].checkbox2 + label {
    background: #67cead;
    }
    .squaredcheck input[type=checkbox].checkbox2:checked + label {
    background: #329d7b;
    }
    .squaredcheck input[type=checkbox].checkbox3 + label {
    background: #ecf;
    }
    .squaredcheck input[type=checkbox].checkbox3:checked + label {
    background: #c6f;
    }

    
</style>
<div class="grid wide container" id="load">
    <div class="row room__status__body">
        <div class="grid">
            <div class="row">
                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Room Status</div>
                    <h5 id="humantest" style="text-align:center; margin: 5px auto; color:black"><?php
                        if ($hooman_now1 == 1) echo "Human in room";
                        else echo "No human"?>
                    </h5>
                    <img id="humanonoff" src="https://cdn-icons-png.flaticon.com/512/2723/2723537.png" alt="human" style="height: 120px; width:120px; display: block; margin: auto; margin-top: 37%">
                    
                </div>
                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Gas</div>
                        <h1 id="gas-now">
                            <h5 style="text-align:center; margin: 5px auto; color:black">Nồng độ Gas hiện tại: <?php echo $gas_now1;?>
                            </h5>
                            
                        </h1>
                        <div class="wrapper" style="display:flex; width: 100%; justify-content: center; align-items: center; margin-top:10%" >
                            <div id="gas_alert" class="container_alert chart" data-size="200" data-value="<?php echo (($gas_now1/1023)*100); ?>"  data-arrow="up">
                            </div>
                        </div>
                    <!-- </div> -->

                    <!-- <script src="<?php echo BASE_URL ?>/public/js/gas_alert.js"></script> -->
                    <!-- <h5>Buzzer:</h5> -->
                    <img id="buzzeronoff" src="https://cdn-icons-png.flaticon.com/512/5936/5936468.png" alt="buzzer" style="height: 34px;width: 34px;float: right;margin-right: 25%;">
                    <form action="<?php echo BASE_URL?>/buzzerswitch/switch" method="POST" id='my-buzzer-form' style="height:60px; width: 150px">
                        <label class="switch" style="float: right;" >
                            <input id='checked_buzzer' name='buzzer_switch1' value="" <?php if ($buzzer_now1 == 2) {echo 'checked';} ?> type="checkbox" onclick="">
                            <!-- <?php if ($buzzer_now1 == 3) {echo 'disabled';} ?> -->
                            <span class="slider round" <?php if ($buzzer_now1 == 3) {echo 'hidden';}?>></span>
                        </label>
                        
                        <!-- <button id="submitbtn" type="submit">Kennads</button> -->
                    </form>
                    <!-- <img id="buzzeronoff" src="https://cdn-icons-png.flaticon.com/512/5936/5936468.png" alt="buzzer" style="height: 34px;width: 34px; margin: 0 auto; margin-top: 50px"> -->
                    <div class="charkbtn">
                        <a href="gaschart"><button class="btn5-hover btn5">Chart</Button></a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Humidity</div>
                    <h5 style="text-align:center; margin: 5px auto; color:black">Độ ẩm hiện tại: <?php echo $humid_now1;?>%</h5>

                    <div class="wrapper_humid" style="display:flex; width: 100%; justify-content: center; align-items: center; margin-top:10%">
                        <div class="container_humid chart_humid" data-size="200" data-value="<?php echo ($humid_now1); ?>" data-arrow="up"></div>
                    </div>


                    <div class="charkbtn">
                        <a href="humiditychart"><button class="btn5-hover btn5">Chart</Button></a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Temperature</div>
                    <h5 style="text-align:center; margin: 5px auto; color:black">Nhiệt độ hiện tại: <?php echo $temp_now1;?>°C</h5>

                    <!-- <div class="body_temp">
                        <div class="container_temp">
                            <div class="outer-circle">
                                <div class="middle-circle">
                                    <div class="inner-circle">
                                        <span class="top">
                                            0-50
                                        </span>
                                        <span class="mid">
                                            <?php echo ($temp_now1); ?>
                                        </span>
                                        <span class="on-hover">
                                            <?php echo ($temp_now1); ?>
                                        </span>
                                        <span class="bottom">
                                            Kitchen
                                        <div class="line">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="wrapper_temp" style="display:flex; width: 100%; justify-content: center; align-items: center; margin-top:10%">
                        <div class="container_temp chart_temp" data-size="200" data-value="<?php echo ($temp_now1); ?>" data-arrow="up"></div>
                    </div>

                    <script src="<?php echo BASE_URL ?>/public/js/temp_alert.js"></script>
                    
                    <div class="charkbtn">
                        <a href="tempchart"><button class="btn5-hover btn5">Chart</Button></a>
                    </div>

                </div>

                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px; ">
                    <div class="room__status__body__list__title">Light</div>
                    <!-- <img id="lightonoff" src="https://cdn-icons.flaticon.com/png/512/3351/premium/3351798.png?token=exp=1648614110~hmac=f7d46da26a8cf81c51fee5d0283acade" alt="light_off" style="height: 100px; width:100px; display: block; margin: auto; margin-top: 30%"> -->
                    <img id="lightonoff" src="https://cdn-icons-png.flaticon.com/512/3176/3176298.png" alt="light_onoff" style="height: 100px; width:100px; display: block; margin: auto; margin-top: 37%">
                    <form action="<?php echo BASE_URL?>/lightswitch/switch" method="POST" id='my-light-form'>
                        <label class="switch" style="display: block; margin: auto; margin-top: 10%">
                            <input id='checked_light' name='light_switch1' value="" <?php if ($light_now1 == 1) {echo 'checked';} ?> type="checkbox" >
                            <span id="supportlight" class="slider round" <?php if ($light_mode1 == 5) {echo 'hidden';}?>></span>
                        </label>
                        <!-- <button id="submitbtn" type="submit">Kennads</button> -->
                    </form>

                    <!-- <div >
                        <label class="switch" for="" style="display:block; margin:auto; margin-top: 10%">Auto
                            <input id='checked_light' name='light_switch1' value="" <?php if ($light_now1 == 1) {echo 'checked';} ?> type="checkbox" >
                            <span class="slider round"></span>
                        </label>
                        
                    </div> -->
                    <!-- <input type="radio" name="iCheck" checked> -->
                    <div class="squaredcheck" style="margin-left: 25%">
                        <input type="checkbox" value="None" id="squaredcheck" class="checkbox1" name="check" <?php if ($light_mode1 == 5) {echo 'checked';} ?> />
                        <label for="squaredcheck"><span>Auto Mode</span></label>
                    </div>

                </div>
                <!-- <div class="col l-12 m-12 c-12">
                        <a href="<?php echo BASE_URL?>/record/update"><button class="btn5-hover btn5" style="display: block; margin: 10% auto;">Update</Button></a>
                </div> -->
                
                <div class="col l-12 m-12 c-12">
                    <a href="summaryreport"><button class="btn5-hover btn5" style="display: block; margin: 10% auto;">Summary Report</Button></a>
                </div>

            </div>  
            
        </div>
        
    </div>
    
</div>

<script src="<?php echo BASE_URL?>/public/js/data.js"></script>

<script src="<?php echo BASE_URL ?>/public/js/gas_alert.js"></script>

<script src="<?php echo BASE_URL ?>/public/js/humid.js"></script>

<script src="<?php echo BASE_URL ?>/public/js/temp.js"></script>

<!-- <script>
    $(document).ready(function(){
    $('input').iCheck({
        checkboxClass: 'icheckbox_flat-red',
        radioClass: 'iradio_flat-red'
    });
    });
</script> -->

<!-- <script>
    var squaredcheck = document.getElementById('squaredcheck')
        var supportlight = document.getElementById('supportlight')
        var checklight = document.getElementById('checked_light')
        
        function autocheck(){
            console.log("HIIIIII")
            console.log(squaredcheck.checked)
            if(squaredcheck.checked == true){
                squaredcheck.checked = true
                checklight.disabled = true
                supportlight.hidden = true
            }
            else{
                squaredcheck.checked = false
                checklight.disabled = false
                supportlight.hidden = false
            }
        }
</script> -->

<script>
    gasnow = document.getElementById('gas-now')
    if (gasnow.innerText == '232') {
        gasnow.innerText = 'ok';
    }
    

    // $(document).ready(function(){

    //     // if ($('#checked_light').prop('checked')) {
    //     //     console.log(1)
    //     //     return
    //     // }
    //     // console.log(0)

    //     $('#checked_light').change(function() {

    //         if ($('#checked_light').prop('checked')) {
    //             console.log('On')
    //             $('#checked_light').val(1)
    //             $(this).prop('checked')
                
    //         }
    //         else {
    //            console.log('Off')
    //             $('#checked_light').val(0)
    //             $(this).attr('checked',false)
    //         }
    //     })

    // });
    
    // var checkbuzzer1 = document.getElementById('checked_buzzer')
    // console.log(checkbuzzer1.checked)
    // if(checkbuzzer1.checked == true){
    //     function myFunction(){
    //         // console.log("HI")
    //         if(checkbuzzer1.checked == true){
    //             console.log(checkbuzzer1.checked)
    //             console.log("HI")
    //             checkbuzzer1.disabled = false
    //         }
    //         else{
    //             checkbuzzer1.disabled = true
    //         }
    //     }
    // }
    // else{
    //     function myFunction(){
    //         // console.log("HI")
    //         if(checkbuzzer1.checked == true){
    //             console.log(checkbuzzer1.checked)
    //             console.log("HI")
    //             checkbuzzer1.disabled = false
    //         }
    //         else{
    //             checkbuzzer1.disabled = true
    //         }
    //     }
    // }
    
    // console.log(<?php $hooman_now1?>)

    document.addEventListener('DOMContentLoaded', function() {
        var checkedLight = $('#checked_light') 
        var myLightForm = $('#my-light-form')

        var checkBuzzer = $('#checked_buzzer')
        var myBuzzerForm = $('#my-buzzer-form')

        var lightonoff = document.getElementById('lightonoff')
        var buzzeronoff = document.getElementById('buzzeronoff')

        var humanonoff = document.getElementById('humanonoff')
        var humantest = document.getElementById('humantest')

        var squaredcheck = $('#squaredcheck')

        var supportlight = document.getElementById('supportlight')
        var checklight = document.getElementById('checked_light')

        isSquaredcheck = squaredcheck.prop('checked')
        if(isSquaredcheck){
            squaredcheck.val('5')
            //squaredcheck.checked = true
        }
        else{
            squaredcheck.val('4')
            //squaredcheck.checked = false
        }
        squaredcheck.change(function() {
            //console.log("OKOK")
            if (squaredcheck.val() == '5') {
                squaredcheck.val('4')
                squaredcheck.checked = false
                checklight.disabled = false
                supportlight.hidden = false
                $.ajax({
                    type: "POST",
                    url: "<?php echo BASE_URL?>/lightswitch/mode",
                    data: {
                        mode: 4,
                    },
                    cache: false,
                });
            }
            else {
                squaredcheck.val('5')
                squaredcheck.checked = true
                checklight.disabled = true
                supportlight.hidden = true   
                $.ajax({
                    type: "POST",
                    url: "<?php echo BASE_URL?>/lightswitch/mode",
                    data: {
                        mode: 5,
                    },
                    cache: false,
                }); 
            }
        })
        

        if(humantest.innerText == "Human in room"){
            humanonoff.src = "https://cdn-icons-png.flaticon.com/512/2723/2723537.png"
        }
        else{
            humanonoff.src = "https://cdn-icons-png.flaticon.com/512/2723/2723532.png"
        }

        var gasalert = document.getElementById('gas_alert')

        

        isLightChecked = checkedLight.prop('checked')
        if (isLightChecked) {
            checkedLight.val('1')
            lightonoff.src = "https://cdn-icons-png.flaticon.com/512/3176/3176298.png"
            // "https://cdn-icons.flaticon.com/png/512/3430/premium/3430793.png?token=exp=1648614143~hmac=292332732fea5b71c12d96f96eec37ef"
        }
        else {
            checkedLight.val('0')
            lightonoff.src = "https://cdn-icons-png.flaticon.com/512/3176/3176276.png"
            // "https://cdn-icons.flaticon.com/png/512/3351/premium/3351798.png?token=exp=1648614110~hmac=f7d46da26a8cf81c51fee5d0283acade"
        }
        isBuzzerChecked = checkBuzzer.prop('checked')

        var checkbuzzer = document.getElementById('checked_buzzer')
        var checklight = document.getElementById('checked_light')
        // var checknum = 0
        // console.log(parseFloat(checknum))

        // if(parseFloat(gasalert.dataset.value) > 58.65102639){
            // console.log("HI")
            // console.log(parseFloat(gasalert.dataset.value))
            // checkBuzzer.val('2')
            // buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936468.png"
            // isBuzzerChecked = true
            // checkbuzzer.checked = true
            // checkBuzzer.prop('disabled',false)
            // checkBuzzer.val('2')
        // }
        // else{
            // checkBuzzer.val('3')
            // buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936529.png"
            // isBuzzerChecked = false
            // checkbuzzer.checked = false
            // checkBuzzer.prop('disabled',true)
            // checkBuzzer.val('3')
        // }

        

        // if(buzzeronoff.src == "https://cdn-icons-png.flaticon.com/512/5936/5936468.png"){
        //     console.log(buzzeronoff.src)
        //     checknum += 1
        //     checkBuzzer.prop('disabled',false)
        //     console.log(checknum)
        //     console.log(checkbuzzer.checked)
        //     if(checknum == 1 && checkbuzzer.checked == false){
        //         checkBuzzer.prop('disabled',true)
        //     }
        // }
        
        // else{
        //     checkBuzzer.prop('disabled',false)
        //     console.log(buzzeronoff.src)
        // }


        console.log(checkbuzzer.checked);

        if (isBuzzerChecked) {
            // checkBuzzer.prop('disabled',false)
            checkBuzzer.val('2')
            buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936468.png"
            // checkbuzzer.checked = true
        }
        else {
            // checkBuzzer.prop('disabled',true)
            checkBuzzer.val('3')
            buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936529.png"
            // checkbuzzer.checked = false
        }
        checkedLight.change(function() {
            if (checkedLight.val() == '1') {
                //console.log('OK')
                checkedLight.val('0')
                lightonoff.src = "https://cdn-icons-png.flaticon.com/512/3176/3176276.png"
                // "https://cdn-icons.flaticon.com/png/512/3351/premium/3351798.png?token=exp=1648614110~hmac=f7d46da26a8cf81c51fee5d0283acade"
                // myLightForm.submit()
                checklight.checked = false
                $.ajax({
                    type: "POST",
                    url: "<?php echo BASE_URL?>/lightswitch/switch",
                    data: {
                        light_switch1: 0,
                    },
                    cache: false,
                });
                return
            }
            else {
                checkedLight.val('1')
                lightonoff.src = "https://cdn-icons-png.flaticon.com/512/3176/3176298.png"
                // "https://cdn-icons.flaticon.com/png/512/3430/premium/3430793.png?token=exp=1648614143~hmac=292332732fea5b71c12d96f96eec37ef"
                checklight.checked = true
                $.ajax({
                    type: "POST",
                    url: "<?php echo BASE_URL?>/lightswitch/switch",
                    data: {
                        light_switch1: 1,
                    },
                    cache: false,
                });
            }
        })

        checkBuzzer.change(function() {
            if (checkBuzzer.val() == '2') {
                checkBuzzer.val('3')
                buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936529.png"
                // checkBuzzer.prop('disabled',false)
                // checkbuzzer.checked = false
                console.log('HI1')
                checkbuzzer.checked = false
                checkbuzzer.disabled = true
                $.ajax({
                    type: "POST",
                    url: "<?php echo BASE_URL?>/buzzerswitch/switch",
                    data: {
                        buzzer_switch1: 3,
                    },
                    cache: false,
                });
                return
            }
            else {
                checkBuzzer.val('2')
                buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936468.png"
                // checkBuzzer.prop('disabled',true)
                // checkbuzzer.checked = true
                console.log('HI2')
                $.ajax({
                    type: "POST",
                    url: "<?php echo BASE_URL?>/buzzerswitch/switch",
                    data: {
                        buzzer_switch1: 2,
                    },
                    cache: false,
                });
            }
        })


    })

</script>
