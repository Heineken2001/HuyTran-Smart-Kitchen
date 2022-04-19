<?php
    // date_default_timezone_set("America/New_York");
    // date_timezone_set($date, timezone_open('Asia/Ho_Chi_Minh'));
    $count = 0;
    $gas_data = 0;
    
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
        echo $value['TIMES'].", ";
        echo $value['DATAS'].", ";
        echo "<br>";
        if ($times6 == $time_test2){
            $gas_data += $value['DATAS'];
            $count += 1;
        }
        else{
            $gas_data += 0;
        }
    }
    $gas_data_all = (int)($gas_data / $count);
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
                        
                    <h5 id="gasdate" style="text-align:center ;color: black; margin: 20px auto">Nồng độ gas trung bình trong ngày <?php echo date("Y-m-d", time()+5*60*60); echo ", ".$time_test2;echo ", ".$times6; echo ", ".$count?> là: <?php echo $gas_data_all ?>ppm.</h5>
                    <h5 id="gasweek" style="text-align:center ;color: black; margin: 20px auto" hidden>Nồng độ gas trong tuần:...</h5>
                    <h5 id="gasmonth" style="text-align:center ;color: black; margin: 20px auto" hidden>Nồng độ gas trong tháng <?php echo date("Y-m", time()+5*60*60);?> là: <?php echo $gas_data ?>ppm.</h5>

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