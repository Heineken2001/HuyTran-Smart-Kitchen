<div class="grid wide container">
    <div class="row room__status__body">
        <div class="grid">
            <div class="row">
                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Room Status</div>
                    <div class="charkbtn">
                        <a href="#"><button class="btn5-hover btn5">Chart</Button></a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Gas</div>
                        <h1 id="gas-now">
                            <?php 
                                echo $gas_now;
                            ?>
                        </h1>
                        <div class="wrapper" style="display:flex; width: 100%; justify-content: center; align-items: center;" >
                            <div class="container_alert chart" data-size="200" data-value="<?php echo ($gas_now/1023*100); ?>" data-arrow="up">
                            </div>
                        </div>
                        <script src="<?php echo BASE_URL ?>/public/js/gas_alert.js"></script>
                    <div class="charkbtn">
                        <a href="#"><button class="btn5-hover btn5">Chart</Button></a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Humidity</div>
                    <div class="charkbtn">
                        <a href="#"><button class="btn5-hover btn5">Chart</Button></a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px;">
                    <div class="room__status__body__list__title">Temperature</div>
                    <div class="charkbtn">
                        <a href="#"><button class="btn5-hover btn5">Chart</Button></a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-12 room__status__body__list" style="border-radius: 20px; ">
                    <div class="room__status__body__list__title">Light</div>

                    <form action="<?php echo BASE_URL?>/lightswitch/switch" method="POST" id='my-form'>
                        <label class="switch">
                            <input name='switch1' value="" <?php if ($light_now == 1) {echo 'checked';} ?> type="checkbox" id='checked_light'>
                            <span class="slider round"></span>
                        </label>
                        <!-- <button id="submitbtn" type="submit">Kennads</button> -->
                    </form>

                </div>
                <div class="col l-12 m-12 c-12">
                        <a href="<?php echo BASE_URL?>/record/update"><button class="btn5-hover btn5">Update</Button></a>
                </div>
            </div>
        </div>
    </div>
</div>


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
        var myForm = $('#my-form')
        var submitBtn = $('#submitbtn')
        
        isChecked = checkedLight.prop('checked')
        if (isChecked) checkedLight.val('1')
        else checkedLight.val('0')

        checkedLight.change(function() {
            if (checkedLight.val() == '1') {
                checkedLight.val('0')
                myForm.submit()
                return
            }
            else {
                checkedLight.val('1')
                myForm.submit()
            }
        })
    })

</script>
