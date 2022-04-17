<div style="width: 100%; text-align:center; font-size: 30px; font-weight: bold; margin-top: 100px">User Infomation</div>
<!-- <div class="mng__title">
    User Information
</div> -->
<div class="row account__manage__body" style="margin-top: 30px">
            <!-- <div style="width: 100%; text-align:center; font-size: 30px; font-weight: 600; margin: 16px;">User Infomation</div> -->
            <div class="grid wide" style="display: flex; flex-direction: column; ">
                <div class="row">
                <!-- <div class="col l-12 m-12 c-12" style="border-radius: 20px"> -->
                    <div class="col l-4 m-4 c-12 account__avatar" style="margin-top: 50px">
                        <img src="<?php echo BASE_URL . "/public/images/uploads/" .$user[0]['IMAGE']; ?>" alt="" class="account__image">
                    </div>
                    <div class="col l-8 m-8 c-12" style="background-color:rgba(255,255,255,0.4); padding:0 32px 0 32px; border-radius: 20px; margin-top: 50px">
                        <div class="account__info" style="color: black;">Name:  <?php echo $user[0]['FNAME']?></div>
                        <div class="account__info" style="color: black;">Account Name:  <?php echo $user[0]['USRNAME']?></div>
                        <div class="account__info" style="color: black;">Email:  <?php echo $user[0]['EMAIL']?></div>
                        <div class="account__info" style="color: black;">Address:  <?php echo $user[0]['ADDRESS']?></div>
                        <div class="account__info" style="color: black;">Gas threshold limit:  <?php echo $user[0]['GASBOUND']?></div>
                    </div>
                </div>
                <!-- </div> -->
                <div class="row" style="margin-top: 20px;">
                    <div class="col l-6 l-o-6">
                        <a style="margin: 0 auto ; display: inline-block" href="<?php echo BASE_URL?>/admin/deleteuser/<?php echo $user[0]['ContID']?>"><button class="btn5-hover btn5 change__info__btn">Delete account</button></a>
                    </div>
                  
                </div>
            </div>
        </div>
    
</div>