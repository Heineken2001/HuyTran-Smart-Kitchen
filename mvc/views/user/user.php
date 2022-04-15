<div class="row account__manage__body">
            <div style="width: 100%; text-align:center; font-size: 30px; font-weight: 600; margin: 16px;">User Infomation</div>
            <div class="grid wide" style="display: flex; flex-direction: column; ">
                <div class="row">
                    <div class="col l-4 m-4 c-12 account__avatar">
                        <img src="<?php echo BASE_URL . "/public/images/uploads/" . $_SESSION['image']; ?>" alt="" class="account__image">
                    </div>
                    <div class="col l-8 m-8 c-12" style="background-color:rgba(201,208,215,0.6); background-clip:content-box; padding:0 32px 0 32px;">
                        <div class="account__info">Name:  <?php echo $user[0]['FNAME']?></div>
                        <div class="account__info">Account Name:  <?php echo $user[0]['USRNAME']?></div>
                        <div class="account__info">Email:  <?php echo $user[0]['EMAIL']?></div>
                        <div class="account__info">Address:  <?php echo $user[0]['ADDRESS']?></div>
                        <div class="account__info">Gas threshold limit:  <?php echo $user[0]['GASBOUND']?></div>
                    </div>
                </div>
                <div class="row" style="margin-top: 32px;">
                    <div class="col l-3 l-o-3">
                        <a style="margin: 0 auto ; display: inline-block" href="<?php echo BASE_URL?>/user/changeinfo/<?php echo $user[0]['ContID']?>"><button class="btn5-hover btn5 change__info__btn">Change Infomation</button></a>
                    </div>
                    <div class="col l-3">
                        <a style="margin: 0 auto; display: inline-block" href="<?php echo BASE_URL?>/user/changepassword"><button class="btn5-hover btn5 change__info__btn">Change Password</button></a>
                    </div>
                    <div class="col l-3">
                        <a style="margin: 0 auto; display: inline-block" href="<?php echo BASE_URL?>/user/reporterror"><button class="btn5-hover btn5 change__info__btn">Report Error</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>