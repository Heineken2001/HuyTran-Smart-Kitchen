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
                        
                    <h5 id="humiditydate" style="text-align:center ;color: black; margin: 20px auto">Độ ẩm trong ngày:...</h5>
                    <h5 id="humidityweek" style="text-align:center ;color: black; margin: 20px auto" hidden>Độ ẩm trong tuần:...</h5>
                    <h5 id="humiditymonth" style="text-align:center ;color: black; margin: 20px auto" hidden>Độ ẩm trong tháng:...</h5>

                    </div>
                </div>

                <div class="col l-7 m-7 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Humidity Chart</div>
                    <div>
                        <canvas id="myChart" style="width:100%; max-width:600px; margin: 10px auto;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="<?php echo BASE_URL?>/public/js/humiditychart.js"></script>


<script>
    var datehumidity = document.getElementById("datehumidity");
    var weekhumidity = document.getElementById("weekhumidity");
    var monthhumidity = document.getElementById("monthhumidity");

    var humiditydate = document.getElementById("humiditydate");
    var humidityweek = document.getElementById("humidityweek");
    var humiditymonth = document.getElementById("humiditymonth");

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
    }
    // console.log(dategas.classList[2]);
    // console.log(dategas.classList);
    // console.log(dategas.className);

</script>