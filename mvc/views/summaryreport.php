<?php

    
?>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css"> -->
<link rel="stylesheet" href="<?php echo BASE_URL?>/public/css/flatpickr.css"></link>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/themes/dark.css">

<style>
    .flatpickr-time {
        display: none;
    }
</style>
<style>
    input {
        border: 2px solid whitesmoke;
        border-radius: 20px;
        padding: 12px 10px;
        text-align: center;
        width: 250px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: black;
    }
</style>

<div class="grid wide container">
    <div style="text-align:center; margin-top: 0">
        <h1 style="margin-top: 100px">Summary Report</h1>
    </div>

    
    <div class="row room__status__body" style="margin-top: 50px">
        
        <div class="grid">
        
            <div class="row">

                <div class="col l-12 m-12 c-12 room__status__body__list" style="border-radius: 20px">
                    <!-- <div class="room__status__body__list__title" style="text-align: center;">
                        <input type="text" id="basicDate" placeholder="Please select Date Time" value="" data-input>
                        <a  href="#"><button id="" class="btn5-hover btn5" onclick="clickfunc()">Confirm</Button></a>
                        <?php echo $date_time ?>
                    </div> -->
                    <form method="POST">
                    <div class="room__status__body__list__title" style="text-align: center;">
                        <input style="margin-top: 20px" type="text" name="data" id="basicDate" placeholder="Please select Date Time" value="" onchange="changedate()" data-input>
                        <!-- <?php echo date("Y-m-d", time()+5*60*60) ?> -->
                        <input style="margin-top: 20px" type="submit" id="get_date" name="form_click" class="btn5-hover btn5" onclick="clickfunc()">
                        <?php 
                            if (isset($_POST['form_click'])){
                                $date_time = $_POST['data'];
                                // echo "<br>";
                                // echo 'DATA ON: ' . ($date_time);
                                // echo '<br/>';
                            }
                            if(isset($date_time) == false){
                                // echo "NO DATA NOW!!!";
                                echo "";
                            }
                            // if (is_null($date_time)){
                            //     echo "HIIIII";
                            // }
                            else{
                            $gas_data = 0;
                            $gas_count = 0;
                            $gas_average = 0;

                            $humid_data = 0;
                            $humid_count = 0;
                            $humid_average = 0;

                            $temp_data = 0;
                            $temp_count = 0;
                            $temp_average = 0;

                            $light_time_arr = array();
                            $light_time = 0;
                            $light_test = true;

                            $danger_gas = 0;

                            $use_kitchen_arr = array();
                            $use_time = 0;
                            $use_test = true;

                            foreach ($all as $key => $value){
                                // echo $value['DATAS'].", ";
                                // echo $value['TIMES'].", ";
                                // echo $value['DevID'];
                                // echo "<br>";
                                // echo $date_time;

                                $time_now = date("Y-m-d", time()+5*60*60);

                                $date_time_after = date("Y-m-d",strtotime($date_time));
                                
                                $time_data = $value['TIMES'];
                                $times1 = str_replace('T', ' ', $time_data);
                                $times2 = (str_replace('Z', '', $times1));
                                $times3 = date("Y-m-d",strtotime($times2)+5*60*60);

                                $time_test1 = mktime("00","00","00","04","13","2022");
                                $time_test2 = date("Y-m-d", $time_test1);

                                // echo $time_now.", ";
                                // echo $times3.", ";
                                if($date_time_after == $times3 && $value['DevID'] == 7){
                                    $gas_data += $value['DATAS'];
                                    $gas_count += 1;
                                    if($value['DATAS'] > 600){
                                        $danger_gas += 1;
                                    }
                                }
                                // echo $gas_count. ", ";
                                if($date_time_after == $times3 && $value['DevID'] == 4){
                                    $humid_data += $value['DATAS'];
                                    $humid_count += 1;
                                }
                                if($date_time_after == $times3 && $value['DevID'] == 5){
                                    $temp_data += $value['DATAS'];
                                    $temp_count += 1;
                                }

                                if($date_time_after == $times3 && $value['DevID'] == 2){
                                    
                                    $times4 = date("H:i:s",strtotime($times2)+5*60*60);
                                    $times5 = strtotime($times4);
                                    // echo $times5.", ";

                                    // echo $times4. ", ";
                                    // echo $value['DATAS']. "<br>";

                                    if($value['DATAS'] == 1) {
                                        if(count($light_time_arr) == 0){
                                            $light_time_arr[] = $times5;
                                        }
                                        else{
                                            if($light_test == true) $light_time += ($times5 - $light_time_arr[count($light_time_arr) - 1]);
                                            $light_time_arr[] = $times5;
                                            $light_test = true;
                                            // echo $light_time. "HELLO,";
                                        }
                                    }
                                    else {
                                        if(count($light_time_arr) == 0){
                                            $light_time += ($times5 - $times5);
                                        }
                                        else{
                                            $light_time += ($times5 - $light_time_arr[count($light_time_arr) - 1]);
                                            $light_test = false;
                                            // echo $light_time. ",HELLO,";
                                        }
                                    }
                                    // echo $light_time_arr[count($light_time_arr) - 1]. "HIIII, ";
                                }

                                if($date_time_after == $times3 && $value['DevID'] == 6){
                                    
                                    $times6 = date("H:i:s",strtotime($times2)+5*60*60);
                                    $times7 = strtotime($times6);
                                    // echo $times7.", ";

                                    // echo $times6. ", ";
                                    // echo $value['DATAS']. "<br>";

                                    if($value['DATAS'] == 1) {
                                        if(count($use_kitchen_arr) == 0){
                                            $use_kitchen_arr[] = $times7;
                                        }
                                        else{
                                            if($use_test == true) $use_time += ($times7 - $use_kitchen_arr[count($use_kitchen_arr) - 1]);
                                            $use_kitchen_arr[] = $times7;
                                            $use_test = true;
                                            // echo $use_time. "HELLO,";
                                        }
                                    }
                                    else {
                                        if(count($use_kitchen_arr) == 0){
                                            $use_time += ($times7 - $times7);
                                        }
                                        else{
                                            $use_time += ($times7 - $use_kitchen_arr[count($use_kitchen_arr) - 1]);
                                            $use_test = false;
                                            // echo $use_time. ",HELLO,";
                                        }
                                    }
                                    // echo $use_kitchen_arr[count($use_kitchen_arr) - 1]. "HIIII, ";
                                }

                            }

                            function secondsToTime($seconds) {
                                $dtF = new \DateTime('@0');
                                $dtT = new \DateTime("@$seconds");
                                return $dtF->diff($dtT)->format('%a days, %h hours, %i minutes and %s seconds');
                            }

                            if($gas_count > 0) $gas_average = (int)($gas_data/$gas_count);
                            if($humid_count > 0) $humid_average = (int)($humid_data/$humid_count);
                            if($humid_count > 0) $temp_average = (int)($temp_data/$temp_count);
                            // $light_time_all = date("Y-m-d H:i:s", $light_time);
                            $light_time_all = secondsToTime($light_time);
                            // echo $light_time_all.".";

                            // echo $date_time;
                            // echo $date_time_after;

                            $use_time_all = secondsToTime($use_time);
                            // echo $use_time_all.".";
                        }
                        ?>
                    </div>
                    </form>
                    
                    <div id="data-display" style="text-align: left; margin-top: 10px; margin-left: 30px; height: 50%; width: 50%; float:left;" hidden>
                        <h5 style="color: black; margin: 10px auto">Thời gian sử dụng bếp trong ngày <?php echo date("d-m-Y",strtotime($date_time))?> là: <?php echo $use_time_all?>.</h5>
                        <br>
                        <h5 style="color: black; margin: 10px auto">Nồng độ Gas trung bình trong ngày <?php echo date("d-m-Y",strtotime($date_time))?> là: <?php echo $gas_average ?>ppm.</h5>
                        <br>
                        <h5 style="color: black; margin: 10px auto">Độ ẩm trung bình trong ngày <?php echo date("d-m-Y",strtotime($date_time))?> là: <?php echo $humid_average ?>%.</h5>
                        <br>
                        <h5 style="color: black; margin: 10px auto">Nhiệt độ trung bình trong ngày <?php echo date("d-m-Y",strtotime($date_time))?> là: <?php echo $temp_average ?>°C.</h5>
                        <br>
                        <h5 style="color: black; margin: 10px auto">Thời gian sử dụng đèn trong ngày <?php echo date("d-m-Y",strtotime($date_time))?> là: <?php echo $light_time_all?>.</h5>
                        <br>
                        <h5 style="color: black; margin: 10px auto; margin-bottom: 50px">Số lần nồng độ Gas vượt ngưỡng trong ngày <?php echo date("d-m-Y",strtotime($date_time))?> là: <?php echo $danger_gas?>.</h5>
                    </div>
                    <div class="" style="float: right; margin-top: 10%; margin-right: 9%">
                        <h1 class="login__header__brand">SmartKitchen by CoderCodon</h1>
                    </div>
                    

                </div>


            </div>
        </div>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script> -->
<script src="<?php echo BASE_URL?>/public/js/flatpickr.js"></script>

<script>
    $("#basicDate").flatpickr({
        enableTime: true,
        // dateFormat: "F, d Y H:i"
        dateFormat: "d-m-Y"
    });
</script>

<script>
    // alert("Please choose date!!!");

    var basicDate = document.getElementById('basicDate');
    // console.log(basicDate.value);

    var get_date = document.getElementById('get_date');
    var data_display = document.getElementById('data-display');

    // setInterval(get_date.click(), 5000);
    
    var check_load = <?php echo isset($date_time)?>;
    if (check_load != 0){
        data_display.hidden = false;
    }
    

    function changedate() {
        // get_date.form.submit();
    }

    function clickfunc() {
        // get_date.placeholder = <?php $_POST['data']?>;
        // console.log("HELLO");
        // data_display.style.display = "block";
        // basicDate.value = <?php echo ($date_time)?>;
    }
</script>