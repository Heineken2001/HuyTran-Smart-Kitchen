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
        <h1 style="margin-top: 100px">Temperature</h1>
    </div>
    <div class="row room__status__body" style="margin-top: 50px">
        
        <div class="grid">
        
            <div class="row">
                
                <!-- <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <h1>HIIIIIIIII</h1>
                </div> -->
                <div class="col l-5 m-5 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Temp</div>
                    <!-- <div class="col l-6 m-8 c-0">
                        <ul class="login__header__nav">
                            <li class="login__header__nav__list"><a href="<?php echo BASE_URL ?>">Home</a></li>
                            <li class="login__header__nav__list"><a href="<?php echo BASE_URL?>/login">Log In</a></li>
                            <li class="login__header__nav__list"><a href="<?php echo BASE_URL?>/register">Register</a></li>
                            <li class="login__header__nav__list"><a href="<?php echo BASE_URL?>/logout">Log Out</a></li>
                        </ul>
                    </div> -->
                    <div style="margin-top: 0px; text-align: center">
                        <a id="dategas" href="#"><button class="btn5-hover btn5 active" onclick="swap()">Date</Button></a>
                        <a id="monthgas" href="#"><button class="btn5-hover btn5" onclick="swap()">Week</Button></a>
                        <a id="yeargas" href="#"><button class="btn5-hover btn5" onclick="swap()">Month</Button></a>
                    </div>
                    <div>
                        
                    <h5 id="gasdate" style="text-align:center ;color: black; margin: 20px auto">Nhiệt độ trong ngày:...</h5>
                    <h5 id="gasmonth" style="text-align:center ;color: black; margin: 20px auto" hidden>Nhiệt độ trong tháng:...</h5>
                    <h5 id="gasyear" style="text-align:center ;color: black; margin: 20px auto" hidden>Nhiệt độ trong năm:...</h5>

                    </div>
                </div>

                <div class="col l-7 m-7 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Temperature Chart</div>
                    <div>
                        <canvas id="myChart" style="width:100%; max-width:600px; margin: 10px auto;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="<?php echo BASE_URL?>/public/js/tempchart.js"></script>


<script>
    var dategas = document.getElementById("dategas")
    var monthgas = document.getElementById("monthgas")
    var yeargas = document.getElementById("yeargas")

    var gasdate = document.getElementById("gasdate")
    var gasmonth = document.getElementById("gasmonth")
    var gasyear = document.getElementById("gasyear")

    console.log(dategas)

    if(dategas.active == true){

    }

</script>