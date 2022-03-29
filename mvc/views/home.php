<div class="grid wide container">
    <div class="row room__status__body">
        <div class="grid">
            <div class="row">
                <div class="col l-2-4 m-4 c-12 room__status__body__list">
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
                            <div class="container_alert chart" data-size="200" data-value="79" data-arrow="up">
                            </div>
                        </div>
                        <script src="<?php echo BASE_URL ?>/public/js/gas_alert.js"></script>
                    <div class="charkbtn">
                        <a href="#"><button class="btn5-hover btn5">Chart</Button></a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-12 room__status__body__list">
                    <div class="room__status__body__list__title">Humidity</div>
                    <div class="charkbtn">
                        <a href="#"><button class="btn5-hover btn5">Chart</Button></a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-12 room__status__body__list">
                    <div class="room__status__body__list__title">Temperature</div>
                    <div class="charkbtn">
                        <a href="#"><button class="btn5-hover btn5">Chart</Button></a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-12 room__status__body__list">
                    <div class="room__status__body__list__title">Light</div>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
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
</script>
