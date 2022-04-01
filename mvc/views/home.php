<<<<<<< Updated upstream
<h1>This is home.php</h1>

<p>Category: </p>
    <?php
    foreach($category as $key => $value) {
        echo $value['name'].'<br/>';
    }
    ?>
=======
<div class="grid wide container">
    <div class="row room__status__body">
        <div class="grid">
            <div class="row">
                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Room Status</div>
                    <h5 style="text-align:center; margin: 5px auto; color:red"><?php
                        if ($hooman_now == 1) echo "Hooman in room";
                        else echo "No hooman"    
                    ?></h5>
                    <div class="charkbtn">
                        <a href="#"><button class="btn5-hover btn5">Summary Report</Button></a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Gas</div>
                        <h1 id="gas-now">
                            <h5 style="text-align:center; margin: 5px auto; color:red">Nồng độ Gas hiện tại: <?php echo $gas_now;?>
                            </h5>
                            
                        </h1>
                        <div class="wrapper" style="display:flex; width: 100%; justify-content: center; align-items: center; margin-top:10%">
                            <div id="gas_alert" class="container_alert chart" data-size="200" data-value="<?php echo ($gas_now/1023*100); ?>" data-arrow="up">
                            </div>
                        </div>
                    <!-- </div> -->

                    <!-- <script src="<?php echo BASE_URL ?>/public/js/gas_alert.js"></script> -->
                    <!-- <h5>Buzzer:</h5> -->
                    <img id="buzzeronoff" src="https://cdn-icons-png.flaticon.com/512/5936/5936468.png" alt="buzzer" style="height: 34px;width: 34px;float: right;margin-right: 25%;">
                    <form action="<?php echo BASE_URL?>/buzzerswitch/switch" method="POST" id='my-buzzer-form' style="height:60px; width: 150px">
                        <label class="switch" style="float: right;">
                            <input name='buzzer_switch1' value="" <?php if ($buzzer_now == 2) {echo 'checked';} ?> type="checkbox" id='checked_buzzer'>
                            <span class="slider round"></span>
                        </label>
                        
                        <!-- <button id="submitbtn" type="submit">Kennads</button> -->
                    </form>
                    
                    <div class="charkbtn">
                        <a href="#"><button class="btn5-hover btn5">Chart</Button></a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Humidity</div>
                    <h5 style="text-align:center; margin: 5px auto; color:red">Độ ẩm hiện tại: <?php echo $humid_now;?>%</h5>

                        <div class="wrapper_humid" style="display:flex; width: 100%; justify-content: center; align-items: center; margin-top:10%">
                            <div class="container_humid chart_humid" data-size="200" data-value="<?php echo ($humid_now); ?>" data-arrow="up"></div>
                        </div>

                        <!-- <script src="<?php echo BASE_URL ?>/public/js/humid.js"></script> -->


                    <div class="charkbtn">
                        <a href="#"><button class="btn5-hover btn5">Chart</Button></a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Temperature</div>
                    <h5 style="text-align:center; margin: 5px auto; color:red">Nhiệt độ hiện tại: <?php echo $temp_now;?>°C</h5>

                        <div class="body_temp">
                        <div class="container_temp">
                            <div class="outer-circle">
                                <div class="middle-circle">
                                    <div class="inner-circle">
                                        <span class="top">
                                            0-50
                                        </span>
                                        <span class="mid">
                                            <?php echo ($temp_now); ?>
                                        </span>
                                        <span class="on-hover">
                                            <?php echo ($temp_now); ?>
                                        </span>
                                        <span class="bottom">
                                            <!-- Kitchen                                       </span> -->
                                        <div class="line">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>


                    <div class="charkbtn">
                        <a href="#"><button class="btn5-hover btn5">Chart</Button></a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px; ">
                    <div class="room__status__body__list__title">Light</div>
                    <!-- <img id="lightonoff" src="https://cdn-icons.flaticon.com/png/512/3351/premium/3351798.png?token=exp=1648614110~hmac=f7d46da26a8cf81c51fee5d0283acade" alt="light_off" style="height: 100px; width:100px; display: block; margin: auto; margin-top: 30%"> -->
                    <img id="lightonoff" src="https://cdn-icons-png.flaticon.com/512/3176/3176298.png" alt="light_onoff" style="height: 100px; width:100px; display: block; margin: auto; margin-top: 30%">
                    <form action="<?php echo BASE_URL?>/lightswitch/switch" method="POST" id='my-light-form'>
                        <label class="switch" style="display: block; margin: auto; margin-top: 10%">
                            <input name='light_switch1' value="" <?php if ($light_now == 1) {echo 'checked';} ?> type="checkbox" id='checked_light'>
                            <span class="slider round"></span>
                        </label>
                        <!-- <button id="submitbtn" type="submit">Kennads</button> -->
                    </form>

                </div>
                <div class="col l-12 m-12 c-12">
                        <a href="<?php echo BASE_URL?>/record/update"><button class="btn5-hover btn5" style="display: block; margin: 10% auto;">Update</Button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo BASE_URL ?>/public/js/gas_alert.js"></script>

<script src="<?php echo BASE_URL ?>/public/js/humid.js"></script>

<script src="<?php echo BASE_URL ?>/public/js/temp.js"></script>

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

    
    document.addEventListener('DOMContentLoaded', function() {
        var checkedLight = $('#checked_light') 
        var myLightForm = $('#my-light-form')

        var checkBuzzer = $('#checked_buzzer')
        var myBuzzerForm = $('#my-buzzer-form')

        var lightonoff = document.getElementById('lightonoff')
        var buzzeronoff = document.getElementById('buzzeronoff')

        var gasalert = document.getElementById('gas_alert')
        // console.log(parseInt(gasalert.dataset.value))

        // if(parseInt(gasalert.dataset.value) > 58.65102639){
        //     // console.log("HI")
        //     checkBuzzer.val('2')
        //     buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936468.png"
        // }
        // else{
        //     checkBuzzer.val('3')
        //     buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936529.png"
        // }

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
        // console.log(checkBuzzer.prop('checked'))
        // console.log()
        var checkbuzzer = document.getElementById('checked_buzzer')

        if(parseInt(gasalert.dataset.value) > 58.65102639){
            console.log("HI")
            // checkBuzzer.val('2')
            // buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936468.png"
            isBuzzerChecked = true
            checkbuzzer.checked = true
        }
        else{
            // checkBuzzer.val('3')
            // buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936529.png"
            isBuzzerChecked = false
            checkbuzzer.checked = false
        }

        if (isBuzzerChecked) {
            checkBuzzer.val('2')
            buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936468.png"
        }
        else {
            checkBuzzer.val('3')
            buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936529.png"
        }
        checkedLight.change(function() {
            if (checkedLight.val() == '1') {
                checkedLight.val('0')
                lightonoff.src = "https://cdn-icons-png.flaticon.com/512/3176/3176276.png"
                // "https://cdn-icons.flaticon.com/png/512/3351/premium/3351798.png?token=exp=1648614110~hmac=f7d46da26a8cf81c51fee5d0283acade"
                myLightForm.submit()
                return
            }
            else {
                checkedLight.val('1')
                lightonoff.src = "https://cdn-icons-png.flaticon.com/512/3176/3176298.png"
                // "https://cdn-icons.flaticon.com/png/512/3430/premium/3430793.png?token=exp=1648614143~hmac=292332732fea5b71c12d96f96eec37ef"
                myLightForm.submit()
            }
        })

        checkBuzzer.change(function() {
            if (checkBuzzer.val() == '2') {
                checkBuzzer.val('3')
                buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936529.png"
                myBuzzerForm.submit()
                return
            }
            else {
                checkBuzzer.val('2')
                buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936468.png"
                myBuzzerForm.submit()
            }
        })


    })

        // var gasalert = document.getElementById('gas_alert')
        // var buzzerOnoff = document.getElementById('buzzeronoff')
        // var checkbuzzer = document.getElementById('checked_buzzer')

        // // console.log(gasalert)
        // console.log(typeof(gasalert.dataset.value))
        // console.log(checkbuzzer.value)
        
        // if(gasalert.dataset.value > 58.65102639){
        //     checkbuzzer.value = 2
        //     buzzerOnoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936468.png"
        // }
        // else{
        //     checkbuzzer.value = 3
        //     buzzeronoff.src = "https://cdn-icons-png.flaticon.com/512/5936/5936529.png"
        // }


</script>
>>>>>>> Stashed changes
