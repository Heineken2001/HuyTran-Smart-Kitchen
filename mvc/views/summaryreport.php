<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/themes/dark.css">

<style>
    .btn5-hover.btn5.active{
        background-image: linear-gradient(
        to right,
        #b4bcc0,
        #b4bcc9,
        #b4bcc8,
        #b4bcc5
        );
        box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
    }

    input {
        border: 2px solid whitesmoke;
        border-radius: 20px;
        padding: 12px 10px;
        text-align: center;
        width: 250px;
    }
</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>

<div class="grid wide container">
    <div style="text-align:center; margin-top: 0">
        <h1 style="margin-top: 100px">Summary Report</h1>
    </div>

    
    <div class="row room__status__body" style="margin-top: 50px">
        
        <div class="grid">
        
            <div class="row">
                
                <!-- <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <h1>HIIIIIIIII</h1>
                </div> -->
                <!-- <div class="col l-5 m-5 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Temp</div>
                    
                    <div style="margin-top: 0px; text-align: center">
                        <a id="dategas" href="#"><button class="btn5-hover btn5 active">Date</Button></a>
                        <a id="monthgas" href="#"><button class="btn5-hover btn5">Month</Button></a>
                        <a id="yeargas" href="#"><button class="btn5-hover btn5">Year</Button></a>
                    </div>
                    <div>
                        
                    <h5 id="gasdate" style="text-align:center ;color: black; margin: 20px auto">Nhiệt độ trong ngày:...</h5>
                    <h5 id="gasmonth" style="text-align:center ;color: black; margin: 20px auto" hidden>Nhiệt độ trong tháng:...</h5>
                    <h5 id="gasdyear" style="text-align:center ;color: black; margin: 20px auto" hidden>Nhiệt độ trong năm:...</h5>

                    </div>
                </div>

                <div class="col l-7 m-7 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Temperature Chart</div>
                    <div>
                        <canvas id="myChart" style="width:100%; max-width:600px; margin: 10px auto;"></canvas>
                    </div>
                </div> -->

                <div class="col l-12 m-12 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">
                        <input type="text" id="basicDate" placeholder="Please select Date Time" data-input>
                    </div>
                    <div style="text-align: left; margin-top: 10px; margin-left: 30px; height: 55%; width: 55%; float:left">
                        <h5 style="color: black; margin: 10px auto">Thời gian sử dụng bếp trong ngày:...</h5>
                        <br>
                        <h5 style="color: black; margin: 10px auto">Nồng độ Gas trung bình trong ngày:...</h5>
                        <br>
                        <h5 style="color: black; margin: 10px auto">Độ ẩm trung bình trong ngày:...</h5>
                        <br>
                        <h5 style="color: black; margin: 10px auto">Nhiệt độ trung bình trong ngày:...</h5>
                        <br>
                        <h5 style="color: black; margin: 10px auto">Thời gian sử dụng đèn trong ngày:...</h5>
                        <br>
                        <h5 style="color: black; margin: 10px auto">Số lần nồng độ Gas vượt ngưỡng trong ngày:...</h5>
                    </div>
                    <div class="" style="float: right; margin-top: 8%; margin-right: 10%">
                        <h1 class="login__header__brand">SmartKitchen by CoderCodon</h1>
                    </div>
                    

                </div>


            </div>
        </div>
    </div>

</div>


<script src="<?php echo BASE_URL?>/public/js/tempchart.js"></script>


<script>
    $("#basicDate").flatpickr({
    enableTime: true,
    dateFormat: "F, d Y H:i"
});
</script>