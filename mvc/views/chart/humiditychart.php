<?php
    // date_default_timezone_set("America/New_York");
    // date_timezone_set($date, timezone_open('Asia/Ho_Chi_Minh'));
    $count = 0;
    $humid_data = 0;
    
    $humid_data_week = 0;
    $count_week = 0;

    $humid_data_month = 0;
    $count_month = 0;

    $humid_data_date_arr = array();
    $humid_date_arr = array();
    $humid_data_arr = array();

    $humid_data_week_arr = array();
    $humid_week_arr = array();
    $humid_dataweek_arr = array();
    $humid_week1 = 0;
    $count_week1 = 0;
    $humid_week1_average = 0;
    $humid_week2 = 0;
    $count_week2 = 0;
    $humid_week2_average = 0;
    $humid_week3 = 0;
    $count_week3 = 0;
    $humid_week3_average = 0;
    $humid_week4 = 0;
    $count_week4 = 0;
    $humid_week4_average = 0;
    $humid_week5 = 0;
    $count_week5 = 0;
    $humid_week5_average = 0;
    $humid_week6 = 0;
    $count_week6 = 0;
    $humid_week6_average = 0;
    $humid_week7 = 0;
    $count_week7 = 0;
    $humid_week7_average = 0;


    $humid_data_month_arr = array();
    $humid_month_arr = array();
    $humid_datamonth_arr = array();
    $humid_month1 = 0;
    $count_month1 = 0;
    $humid_month1_average = 0;
    $humid_month2 = 0;
    $count_month2 = 0;
    $humid_month2_average = 0;
    $humid_month3 = 0;
    $count_month3 = 0;
    $humid_month3_average = 0;
    $humid_month4 = 0;
    $count_month4 = 0;
    $humid_month4_average = 0;
    $humid_month5 = 0;
    $count_month5 = 0;
    $humid_month5_average = 0;

    foreach ($humid as $key => $value){
        // $humid_data = $value['DATAS'];
        
        $time_data = $value['TIMES'];
        // $times1 = date(substr($time_data, 0, 10));
        // $times2 = strstr($time_data, 'T');
        // $times3 = date(substr($times2, 1, 8));
        $times4 = str_replace('T', ' ', $time_data);
        $times5 = (str_replace('Z', '', $times4));
        $times6 = date("Y-m-d",strtotime($times5)+5*60*60);
        $timess = date("Y-m-d H:i:s",strtotime($times5)+5*60*60);
        $time_now = date("Y-m-d", time()+5*60*60);
        $time_test1 = mktime("00","00","00","04","13","2022");
        $time_test2 = date("Y-m-d", $time_test1);

        // continue;
        // $times = strtotime($time_data);


        // echo $value['TIMES'].", ";
        // echo $value['DATAS'].", ";
        // echo "<br>";
        if ($times6 == $time_now){
            // echo $value['DATAS'].", ";

            // echo $timess . ", ";
            $humid_data_date_arr[$timess] = $value['DATAS'];
            $humid_date_arr[] = $timess;
            $humid_data_arr[] = $value['DATAS'];
            $humid_data += $value['DATAS'];
            $count += 1;
        }
        else{
            $humid_data += 0;
            $count += 0;
        }


        $time_week = (int)(date("d", time()+5*60*60));
        // echo $time_week."HI";
        $time_week_test1 = mktime("00","00","00","04","14","2022");
        $time_week_test2 = (int)(date("d", $time_week_test1));
        $times7 = (int)(date("d",strtotime($times5)+5*60*60));
        // echo $time_week.", ";
        if($time_week >= 1 && $time_week <= 7){
            $humid_week_arr = array('ngày 1','ngày 2','ngày 3','ngày 4','ngày 5','ngày 6','ngày 7');
            if($times7 >= 1 && $times7 <= 7){
                // echo $value['DATAS'].", ";

                

                $humid_data_week += $value['DATAS'];
                $count_week += 1;

                if($times7 == 1){
                    $humid_week1 += $value['DATAS'];
                    $count_week1 += 1;
                }
                if($times7 == 2){
                    $humid_week2 += $value['DATAS'];
                    $count_week2 += 1;
                }
                if($times7 == 3){
                    $humid_week3 += $value['DATAS'];
                    $count_week3 += 1;
                }
                if($times7 == 4){
                    $humid_week4 += $value['DATAS'];
                    $count_week4 += 1;
                }
                if($times7 == 5){
                    $humid_week5 += $value['DATAS'];
                    $count_week5 += 1;
                }
                if($times7 == 6){
                    $humid_week6 += $value['DATAS'];
                    $count_week6 += 1;
                }
                if($times7 == 7){
                    $humid_week7 += $value['DATAS'];
                    $count_week7 += 1;
                }
            }
            else{
                $humid_data_week += 0;
                $count_week += 0;
            }
        }
        elseif($time_week >= 8 && $time_week <= 14){
            $humid_week_arr = array('ngày 8','ngày 9','ngày 10','ngày 11','ngày 12','ngày 13','ngày 14');
            if($times7 >= 8 && $times7 <= 14){
                // echo $value['DATAS'].", ";

                

                $humid_data_week += $value['DATAS'];
                $count_week += 1;

                if($times7 == 8){
                    $humid_week1 += $value['DATAS'];
                    $count_week1 += 1;
                }
                if($times7 == 9){
                    $humid_week2 += $value['DATAS'];
                    $count_week2 += 1;
                }
                if($times7 == 10){
                    $humid_week3 += $value['DATAS'];
                    $count_week3 += 1;
                }
                if($times7 == 11){
                    $humid_week4 += $value['DATAS'];
                    $count_week4 += 1;
                }
                if($times7 == 12){
                    $humid_week5 += $value['DATAS'];
                    $count_week5 += 1;
                }
                if($times7 == 13){
                    $humid_week6 += $value['DATAS'];
                    $count_week6 += 1;
                }
                if($times7 == 14){
                    $humid_week7 += $value['DATAS'];
                    $count_week7 += 1;
                }
            }
            else{
                $humid_data_week += 0;
                $count_week += 0;
            }
        }
        elseif($time_week >= 15 && $time_week <= 21){
            // echo "HIIIII";
            $humid_week_arr = array('ngày 15','ngày 16','ngày 17','ngày 18','ngày 19','ngày 20','ngày 21');
            if($times7 >= 15 && $times7 <= 21){
                // echo $value['DATAS'].", ";
                

                

                $humid_data_week += $value['DATAS'];
                $count_week += 1;

                if($times7 == 15){
                    $humid_week1 += $value['DATAS'];
                    $count_week1 += 1;
                }
                if($times7 == 16){
                    $humid_week2 += $value['DATAS'];
                    $count_week2 += 1;
                }
                if($times7 == 17){
                    $humid_week3 += $value['DATAS'];
                    $count_week3 += 1;
                }
                if($times7 == 18){
                    $humid_week4 += $value['DATAS'];
                    $count_week4 += 1;
                }
                if($times7 == 19){
                    $humid_week5 += $value['DATAS'];
                    $count_week5 += 1;
                }
                if($times7 == 20){
                    $humid_week6 += $value['DATAS'];
                    $count_week6 += 1;
                }
                if($times7 == 21){
                    $humid_week7 += $value['DATAS'];
                    $count_week7 += 1;
                }
            }
            else{
                $humid_data_week += 0;
                $count_week += 0;
            }
        }
        elseif($time_week >= 22 && $time_week <= 28){
            $humid_week_arr = array('ngày 22','ngày 23','ngày 24','ngày 25','ngày 26','ngày 27','ngày 28');
            if($times7 >= 22 && $times7 <= 28){
                // echo $value['DATAS'].", ";

                

                $humid_data_week += $value['DATAS'];
                $count_week += 1;

                if($times7 == 22){
                    $humid_week1 += $value['DATAS'];
                    $count_week1 += 1;
                }
                if($times7 == 23){
                    $humid_week2 += $value['DATAS'];
                    $count_week2 += 1;
                }
                if($times7 == 24){
                    $humid_week3 += $value['DATAS'];
                    $count_week3 += 1;
                }
                if($times7 == 25){
                    $humid_week4 += $value['DATAS'];
                    $count_week4 += 1;
                }
                if($times7 == 26){
                    $humid_week5 += $value['DATAS'];
                    $count_week5 += 1;
                }
                if($times7 == 27){
                    $humid_week6 += $value['DATAS'];
                    $count_week6 += 1;
                }
                if($times7 == 28){
                    $humid_week7 += $value['DATAS'];
                    $count_week7 += 1;
                }
            }
            else{
                $humid_data_week += 0;
                $count_week += 0;
            }
        }
        else{
            $humid_week_arr = array('ngày 29','ngày 30','ngày 31');
            if($times7 >= 29 && $times7 <= 31){
                // echo $value['DATAS'].", ";

                

                $humid_data_week += $value['DATAS'];
                $count_week += 1;

                if($times7 == 29){
                    $humid_week1 += $value['DATAS'];
                    $count_week1 += 1;
                }
                if($times7 == 30){
                    $humid_week2 += $value['DATAS'];
                    $count_week2 += 1;
                }
                if($times7 == 31){
                    $humid_week3 += $value['DATAS'];
                    $count_week3 += 1;
                }
            }
            else{
                $humid_data_week += 0;
                $count_week += 0;
            }
        }


        $time_month = date("Y-m", time()+5*60*60);
        $times8 = date("Y-m",strtotime($times5)+5*60*60);

        if ($times8 == $time_month){
            $humid_month_arr = array('tuần 1', 'tuần 2', 'tuần 3', 'tuần 4', 'tuần 5');

            $times9 = date("d",strtotime($times5)+5*60*60);

            // echo $value['DATAS'].", ";
            $humid_data_month += $value['DATAS'];
            $count_month += 1;

            if($times9 >=1 && $times9 <=7){
                $humid_month1 += $value['DATAS'];
                $count_month1 += 1;
            }
            if($times9 >=8 && $times9 <=14){
                $humid_month2 += $value['DATAS'];
                $count_month2 += 1;
            }
            if($times9 >=15 && $times9 <=21){
                $humid_month3 += $value['DATAS'];
                $count_month3 += 1;
            }
            if($times9 >=22 && $times9 <=28){
                $humid_month4 += $value['DATAS'];
                $count_month4 += 1;
            }
            if($times9 >=29 && $times9 <=31){
                $humid_month5 += $value['DATAS'];
                $count_month5 += 1;
            }

        }
        else{
            $humid_data_month += 0;
            $count_month += 0;
        }

    }

    if($count == 0) $humid_data_all = $humid_data;
    else $humid_data_all = (int)($humid_data / $count);

    if($count_week == 0) $humid_data_all_week = $humid_data_week;
    else $humid_data_all_week = (int)($humid_data_week / $count_week);

    if($count_week1 > 0) $humid_week1_average = (int)($humid_week1/$count_week1);
    if($count_week2 > 0) $humid_week2_average = (int)($humid_week2/$count_week2);
    if($count_week3 > 0) $humid_week3_average = (int)($humid_week3/$count_week3);
    if($count_week4 > 0) $humid_week4_average = (int)($humid_week4/$count_week4);
    if($count_week5 > 0) $humid_week5_average = (int)($humid_week5/$count_week5);
    if($count_week6 > 0) $humid_week6_average = (int)($humid_week6/$count_week6);
    if($count_week7 > 0) $humid_week7_average = (int)($humid_week7/$count_week7);

    // echo $humid_week_arr[0];
    $humid_dataweek_arr = array($humid_week1_average,$humid_week2_average,$humid_week3_average,$humid_week4_average,$humid_week5_average,$humid_week6_average,$humid_week7_average);
    for ($i = 0; $i < 7; $i += 1){
        $humid_data_week_arr[$humid_week_arr[$i]] = $humid_dataweek_arr[$i];
    }

    if($count_month == 0) $humid_data_all_month = $humid_data_month;
    else $humid_data_all_month = (int)($humid_data_month / $count_month);

    if($count_month1 > 0) $humid_month1_average = (int)($humid_month1/$count_month1);
    if($count_month2 > 0) $humid_month2_average = (int)($humid_month2/$count_month2);
    if($count_month3 > 0) $humid_month3_average = (int)($humid_month3/$count_month3);
    if($count_month4 > 0) $humid_month4_average = (int)($humid_month4/$count_month4);
    if($count_month5 > 0) $humid_month5_average = (int)($humid_month5/$count_month5);

    $humid_datamonth_arr = array($humid_month1_average,$humid_month2_average,$humid_month3_average,$humid_month4_average,$humid_month5_average);
    for ($i = 0; $i < 5; $i += 1){
        $humid_data_month_arr[$humid_month_arr[$i]] = $humid_datamonth_arr[$i];
    }


?>

<style>
    .btn5-hover.btn5.active{
        background-image: linear-gradient(
        to right,
        #918A8A,
        #E0E0E0,
        #9C9C9C,
        #ffffff
        );
        box-shadow: 0 4px 15px 0 grey;
    }
</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<div class="grid wide container">
    <div style="text-align:center; margin-top: 0">
        <h1 style="margin-top: 100px">Humidity</h1>
    </div>
    <div class="row room__status__body" style="margin-top: 50px">
        
        <div class="grid">
        
            <div class="row">
                
                <!-- <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <h1>HIIIIIIIII</h1>
                </div> -->
                <div class="col l-5 m-5 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Humidity</div>
                    <!-- <div class="col l-6 m-8 c-0">
                        <ul class="login__header__nav">
                            <li class="login__header__nav__list"><a href="<?php echo BASE_URL ?>">Home</a></li>
                            <li class="login__header__nav__list"><a href="<?php echo BASE_URL?>/login">Log In</a></li>
                            <li class="login__header__nav__list"><a href="<?php echo BASE_URL?>/register">Register</a></li>
                            <li class="login__header__nav__list"><a href="<?php echo BASE_URL?>/logout">Log Out</a></li>
                        </ul>
                    </div> -->
                    <div style="margin-top: 0px; text-align: center">
                        <a  href="#"><button id="datehumidity" class="btn5-hover btn5 active" onclick="clickfunc1()">Date</Button></a>
                        <a  href="#"><button id="weekhumidity" class="btn5-hover btn5" onclick="clickfunc2()">Week</Button></a>
                        <a  href="#"><button id="monthhumidity" class="btn5-hover btn5" onclick="clickfunc3()">Month</Button></a>
                    </div>
                    <div>
                        
                    <!-- <h5 id="humiditydate" style="text-align:center ;color: black; margin: 20px auto">Độ ẩm trong ngày:...</h5>
                    <h5 id="humidityweek" style="text-align:center ;color: black; margin: 20px auto" hidden>Độ ẩm trong tuần:...</h5>
                    <h5 id="humiditymonth" style="text-align:center ;color: black; margin: 20px auto" hidden>Độ ẩm trong tháng:...</h5> -->
                    

                    <h5 id="humiditydate" style="text-align: left; color: black; margin: 40px auto auto 40px">Độ ẩm trung bình trong ngày <?php echo date("d-m-Y", time()+5*60*60);?> là: <?php echo $humid_data_all ?>%.
                    <br>Độ ẩm gần nhất trong ngày hiện tại:
                    <br>
                    <?php
                        // $timess1; $timess2; $timess3; $timess4; $timess5; $timess6; $timess7; $timess8; $timess9; $timess10; $timess11; $timess12;
                        // $datass1; $datass2; $datass3; $datass4; $datass5; $datass6; $datass7; $datass8; $datass9; $datass10; $datass11; $datass12;
                        foreach ($humid_data_date_arr as $times => $datas){
                            echo $times.": ".$datas."%. <br>";
                        }
                        // echo $humid_data_arr[0];
                        // echo $humid_date_arr[0];
                    ?>
                    
                    </h5>
                    <h5 id="humidityweek" style="text-align: left; color: black; margin: 40px auto auto 20px" hidden>Độ ẩm trung bình trong tuần <?php
                    if((int)(date("d", time()+5*60*60)) >= 1 &&(int)(date("d", time()+5*60*60)) <= 7) echo "thứ nhất (ngày 1-7) của tháng ".date("m-Y", time()+5*60*60);
                    elseif((int)(date("d", time()+5*60*60)) >= 8 &&(int)(date("d", time()+5*60*60)) <= 14) {
                        echo "thứ hai (ngày 8-14) của tháng ".date("m-Y", time()+5*60*60);
                    }
                    elseif((int)(date("d", time()+5*60*60)) >= 15 &&(int)(date("d", time()+5*60*60)) <= 21) echo "thứ ba (ngày 15-21) của tháng ".date("m-Y", time()+5*60*60);
                    elseif((int)(date("d", time()+5*60*60)) >= 22 &&(int)(date("d", time()+5*60*60)) <= 28) echo "thứ tư (ngày 22-28) của tháng ".date("m-Y", time()+5*60*60);
                    else echo "cuối cùng của tháng ".date("m-Y", time()+5*60*60);
                    ?> là: <?php echo $humid_data_all_week ?>%.
                    
                    <br>Độ ẩm các ngày trong tuần hiện tại:
                    <br>
                    <?php
                        foreach ($humid_data_week_arr as $times => $datas){
                            echo $times.": ".$datas."%. <br>";
                        }
                    ?>
                    </h5>
                    <h5 id="humiditymonth" style="text-align: left; color: black; margin: 40px auto auto 40px" hidden>Độ ẩm trung bình trong tháng <?php echo date("m-Y", time()+5*60*60);?> là: <?php echo $humid_data_all_month ?>%.
                    <br>Độ ẩm của các tuần trong tháng hiện tại:
                    <br>
                    <?php
                        foreach ($humid_data_month_arr as $times => $datas){
                            echo $times.": ".$datas."%. <br>";
                        }
                    ?>
                    </h5>


                    </div>
                </div>

                <div class="col l-7 m-7 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Humidity Chart</div>
                    <div>
                        <canvas id="myChart" style="width:100%; max-width:600px; margin: 10px auto;"></canvas>
                        <canvas id="myChart_week" style="width:100%; max-width:600px; margin: 10px auto; display: none"></canvas>
                        <canvas id="myChart_month" style="width:100%; max-width:600px; margin: 10px auto; display: none"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- <script src="<?php echo BASE_URL?>/public/js/humiditychart.js"></script> -->

<script>
    

    // var yValues = [500,600,700,800,900,1000,510,520,300,400,700,1023];
    // var xValues = [1,2,3,4,5,6,7,8,9,10,11,12];

    var xValues= <?php echo json_encode($humid_date_arr); ?>;
 
    for(var i = 0; i < 12; i++){
        // alert(xValues[i]);
    }

    var yValues= <?php echo json_encode($humid_data_arr); ?>;
 
    for(var i = 0; i < 12; i++){
        // alert(yValues[i]);
    }


    new Chart("myChart", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,0,255,1.0)",
        borderColor: "rgba(0,0,255,0.1)",
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        scales: {
        yAxes: [{ticks: {min: 0, max:100}}],
        }
    }
    });
</script>

<script>
    

    // var yValues = [500,600,700,800,900,1000,510,520,300,400,700,1023];
    // var xValues = [1,2,3,4,5,6,7,8,9,10,11,12];

    var xValues= <?php echo json_encode($humid_week_arr); ?>;

    var yValues= <?php echo json_encode($humid_dataweek_arr); ?>;
 

    new Chart("myChart_week", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,0,255,1.0)",
        borderColor: "rgba(0,0,255,0.1)",
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        scales: {
        yAxes: [{ticks: {min: 0, max:100}}],
        }
    }
    });
</script>

<script>
    

    // var yValues = [500,600,700,800,900,1000,510,520,300,400,700,1023];
    // var xValues = [1,2,3,4,5,6,7,8,9,10,11,12];

    var xValues= <?php echo json_encode($humid_month_arr); ?>;

    var yValues= <?php echo json_encode($humid_datamonth_arr); ?>;
 

    new Chart("myChart_month", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,0,255,1.0)",
        borderColor: "rgba(0,0,255,0.1)",
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        scales: {
        yAxes: [{ticks: {min: 0, max:100}}],
        }
    }
    });
</script>

<script>
    var datehumidity = document.getElementById("datehumidity");
    var weekhumidity = document.getElementById("weekhumidity");
    var monthhumidity = document.getElementById("monthhumidity");

    var humiditydate = document.getElementById("humiditydate");
    var humidityweek = document.getElementById("humidityweek");
    var humiditymonth = document.getElementById("humiditymonth");

    var mychart = document.getElementById('myChart');
    var mychartweek = document.getElementById('myChart_week');
    var mychartmonth = document.getElementById('myChart_month');

    // console.log(gasdate.hidden);
    // console.log(dategas.classList[2]);

    function clickfunc1(){
        if(datehumidity.classList[2] != 'active'){
            // dategas.classList[2] = ' ';
            monthhumidity.className = "btn5-hover btn5";
            datehumidity.className = "btn5-hover btn5 active";
            weekhumidity.className = "btn5-hover btn5";
            // console.log('HI');
        }
        if(humiditydate.hidden == true){
            humiditydate.hidden = false;
            humidityweek.hidden = true;
            humiditymonth.hidden = true;
        }
        if(mychart.style.display == "none"){
            mychart.style.display = "block";
            mychartweek.style.display = "none";
            mychartmonth.style.display = "none";
        }
    }
    function clickfunc2(){
        if(weekhumidity.classList[2] != 'active'){
            // dategas.classList[2] = ' ';
            weekhumidity.className = "btn5-hover btn5 active";
            datehumidity.className = "btn5-hover btn5";
            monthhumidity.className = "btn5-hover btn5";
            // console.log('HI');
        }
        if(humidityweek.hidden == true){
            humiditydate.hidden = true;
            humidityweek.hidden = false;
            humiditymonth.hidden = true;
        }
        if(mychartweek.style.display == "none"){
            mychart.style.display = "none";
            mychartweek.style.display = "block";
            mychartmonth.style.display = "none";
        }
    }
    function clickfunc3(){
        if(monthhumidity.classList[2] != 'active'){
            // dategas.classList[2] = ' ';
            weekhumidity.className = "btn5-hover btn5";
            datehumidity.className = "btn5-hover btn5";
            monthhumidity.className = "btn5-hover btn5 active";
            // console.log('HI');
        }
        if(humiditymonth.hidden == true){
            humiditydate.hidden = true;
            humidityweek.hidden = true;
            humiditymonth.hidden = false;
        }
        if(mychartmonth.style.display == "none"){
            mychart.style.display = "none";
            mychartweek.style.display = "none";
            mychartmonth.style.display = "block";
        }
    }
    // console.log(dategas.classList[2]);
    // console.log(dategas.classList);
    // console.log(dategas.className);

</script>