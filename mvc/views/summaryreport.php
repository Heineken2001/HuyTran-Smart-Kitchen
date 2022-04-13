<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/themes/dark.css">

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

                <div class="col l-12 m-12 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title" style="text-align: center;">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>

<script>
    $("#basicDate").flatpickr({
        enableTime: true,
        // dateFormat: "F, d Y H:i"
        dateFormat: "Y-m-d H:i:ss"
    });
</script>