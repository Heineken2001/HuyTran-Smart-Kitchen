<?php
    // date_default_timezone_set("America/New_York");
    // date_timezone_set($date, timezone_open('Asia/Ho_Chi_Minh'));
    $count = 0;
    $gas_data = 0;
    
    $gas_data_week = 0;
    $count_week = 0;

    $gas_data_month = 0;
    $count_month = 0;

    foreach ($gas as $key => $value){
        // $gas_data = $value['DATAS'];
        
        $time_data = $value['TIMES'];
        // $times1 = date(substr($time_data, 0, 10));
        // $times2 = strstr($time_data, 'T');
        // $times3 = date(substr($times2, 1, 8));
        $times4 = str_replace('T', ' ', $time_data);
        $times5 = (str_replace('Z', '', $times4));
        $times6 = date("Y-m-d",strtotime($times5)+5*60*60);
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
            $gas_data += $value['DATAS'];
            $count += 1;
        }
        else{
            $gas_data += 0;
            $count += 0;
        }


        $time_week = (int)(date("d", time()+5*60*60));
        // echo $time_week."HI";
        $time_week_test1 = mktime("00","00","00","04","13","2022");
        $time_week_test2 = (int)(date("d", $time_week_test1));
        $times7 = (int)(date("d",strtotime($times5)+5*60*60));
        if($time_week >= 1 && $time_week <= 7){
            if($times7 >= 1 && $times7 <= 7){
                // echo $value['DATAS'].", ";
                $gas_data_week += $value['DATAS'];
                $count_week += 1;
            }
            else{
                $gas_data_week += 0;
                $count_week += 0;
            }
        }
        elseif($time_week >= 8 && $time_week <= 14){
            if($times7 >= 8 && $times7 <= 14){
                // echo $value['DATAS'].", ";
                $gas_data_week += $value['DATAS'];
                $count_week += 1;
            }
            else{
                $gas_data_week += 0;
                $count_week += 0;
            }
        }
        elseif($time_week >= 15 && $time_week <= 21){
            if($times7 >= 15 && $times7 <= 21){
                // echo $value['DATAS'].", ";
                $gas_data_week += $value['DATAS'];
                $count_week += 1;
            }
            else{
                $gas_data_week += 0;
                $count_week += 0;
            }
        }
        elseif($time_week >= 22 && $time_week <= 28){
            if($times7 >= 22 && $times7 <= 28){
                // echo $value['DATAS'].", ";
                $gas_data_week += $value['DATAS'];
                $count_week += 1;
            }
            else{
                $gas_data_week += 0;
                $count_week += 0;
            }
        }
        else{
            if($times7 >= 29 && $times7 <= 31){
                // echo $value['DATAS'].", ";
                $gas_data_week += $value['DATAS'];
                $count_week += 1;
            }
            else{
                $gas_data_week += 0;
                $count_week += 0;
            }
        }


        $time_month = date("Y-m", time()+5*60*60);
        $times8 = date("Y-m",strtotime($times5)+5*60*60);

        if ($times8 == $time_month){
            // echo $value['DATAS'].", ";
            $gas_data_month += $value['DATAS'];
            $count_month += 1;
        }
        else{
            $gas_data_month += 0;
            $count_month += 0;
        }

    }

    if($count == 0) $gas_data_all = $gas_data;
    else $gas_data_all = (int)($gas_data / $count);

    if($count_week == 0) $gas_data_all_week = $gas_data_week;
    else $gas_data_all_week = (int)($gas_data_week / $count_week);

    if($count_month == 0) $gas_data_all_month = $gas_data_month;
    else $gas_data_all_month = (int)($gas_data_month / $count_month);

?>
<style>
    .btn5-hover.btn5.active{
        /* background-image: linear-gradient(
        to right,
        #b4bcc0,
        #b4bcc9,
        #b4bcc8,
        #b4bcc5
        );
        box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75); */
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
        <h1 style="margin-top: 100px">Gas Concentration</h1>
    </div>
    <div class="row room__status__body" style="margin-top: 50px">
        
        <div class="grid">
        
            <div class="row">
                
                <!-- <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <h1>HIIIIIIIII</h1>
                </div> -->
                <div class="col l-5 m-5 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Gas</div>
                    <!-- <div class="col l-6 m-8 c-0">
                        <ul class="login__header__nav">
                            <li class="login__header__nav__list"><a href="<?php echo BASE_URL ?>">Home</a></li>
                            <li class="login__header__nav__list"><a href="<?php echo BASE_URL?>/login">Log In</a></li>
                            <li class="login__header__nav__list"><a href="<?php echo BASE_URL?>/register">Register</a></li>
                            <li class="login__header__nav__list"><a href="<?php echo BASE_URL?>/logout">Log Out</a></li>
                        </ul>
                    </div> -->
                    <div style="margin-top: 0px; text-align: center">
                        <a  href="#"><button id="dategas" class="btn5-hover btn5 active" onclick="clickfunc1()">Date</Button></a>
                        <a  href="#"><button id="weekgas" class="btn5-hover btn5" onclick="clickfunc2()">Week</Button></a>
                        <a  href="#"><button id="monthgas" class="btn5-hover btn5" onclick="clickfunc3()">Month</Button></a>
                    </div>
                    <div>
                        
                    <h5 id="gasdate" style="text-align:center ;color: black; margin: 70px auto">Nồng độ gas trung bình trong ngày <?php echo date("d-m-Y", time()+5*60*60);?> là: <?php echo $gas_data_all ?>ppm.</h5>
                    <h5 id="gasweek" style="text-align:center ;color: black; margin: 70px auto" hidden>Nồng độ gas trung bình trong tuần <?php
                    if((int)(date("d", time()+5*60*60)) >= 1 &&(int)(date("d", time()+5*60*60)) <= 7) echo "thứ nhất (ngày 1-7) của tháng ".date("m-Y", time()+5*60*60);
                    elseif((int)(date("d", time()+5*60*60)) >= 8 &&(int)(date("d", time()+5*60*60)) <= 14) echo "thứ hai (ngày 8-14) của tháng ".date("m-Y", time()+5*60*60);
                    elseif((int)(date("d", time()+5*60*60)) >= 15 &&(int)(date("d", time()+5*60*60)) <= 21) echo "thứ ba (ngày 15-21) của tháng ".date("m-Y", time()+5*60*60);
                    elseif((int)(date("d", time()+5*60*60)) >= 22 &&(int)(date("d", time()+5*60*60)) <= 28) echo "thứ tư (ngày 22-28) của tháng ".date("m-Y", time()+5*60*60);
                    else echo "cuối cùng của tháng ".date("m-Y", time()+5*60*60);
                    ?> là: <?php echo $gas_data_all_week ?>ppm.</h5>
                    <h5 id="gasmonth" style="text-align:center ;color: black; margin: 70px auto" hidden>Nồng độ gas trung bình trong tháng <?php echo date("m-Y", time()+5*60*60);?> là: <?php echo $gas_data_all_month ?>ppm.</h5>

                    </div>
                </div>

                <div class="col l-7 m-7 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Gas Chart</div>
                    <div>
                        <canvas id="myChart" style="width:100%; max-width:600px; margin: 10px auto;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="<?php echo BASE_URL?>/public/js/gaschart.js"></script>


<script>
    var dategas = document.getElementById("dategas");
    var weekgas = document.getElementById("weekgas");
    var monthgas = document.getElementById("monthgas");

    var gasdate = document.getElementById("gasdate");
    var gasweek = document.getElementById("gasweek");
    var gasmonth = document.getElementById("gasmonth");

    // console.log(gasdate.hidden);
    // console.log(dategas.classList[2]);

    function clickfunc1(){
        if(dategas.classList[2] != 'active'){
            // dategas.classList[2] = ' ';
            monthgas.className = "btn5-hover btn5";
            dategas.className = "btn5-hover btn5 active";
            weekgas.className = "btn5-hover btn5";
            // console.log('HI');
        }
        if(gasdate.hidden == true){
            gasdate.hidden = false;
            gasmonth.hidden = true;
            gasweek.hidden = true;
        }
    }
    function clickfunc2(){
        if(weekgas.classList[2] != 'active'){
            // dategas.classList[2] = ' ';
            weekgas.className = "btn5-hover btn5 active";
            dategas.className = "btn5-hover btn5";
            monthgas.className = "btn5-hover btn5";
            // console.log('HI');
        }
        if(gasweek.hidden == true){
            gasdate.hidden = true;
            gasweek.hidden = false;
            gasmonth.hidden = true;
        }
    }
    function clickfunc3(){
        if(monthgas.classList[2] != 'active'){
            // dategas.classList[2] = ' ';
            weekgas.className = "btn5-hover btn5";
            dategas.className = "btn5-hover btn5";
            monthgas.className = "btn5-hover btn5 active";
            // console.log('HI');
        }
        if(gasmonth.hidden == true){
            gasdate.hidden = true;
            gasweek.hidden = true;
            gasmonth.hidden = false;
        }
    }
    // console.log(dategas.classList[2]);
    // console.log(dategas.classList);
    // console.log(dategas.className);

</script>