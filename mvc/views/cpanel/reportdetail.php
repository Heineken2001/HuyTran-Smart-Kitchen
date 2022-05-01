<div class="row account__manage__body">
            <div style="width: 100%; text-align:center; font-size: 30px; font-weight: 600; margin: 16px;">Report details</div>
            <div class="grid wide" style="display: flex; flex-direction: column; ">
                <div class="row">
                    <div class="col l-12 m-12 c-12" style="background-color:rgba(201,208,215,0.6); background-clip:content-box; padding:0 32px 0 32px;">
                        <div class="account__info">From:  <?php echo $details[0]['FNAME']?></div>
                        <div class="account__info">Account Name:  <?php echo $details[0]['USRNAME']?></div>
                        <div class="account__info">Email:  <?php echo $details[0]['EMAIL']?></div>
                        <div class="account__info">Address:  <?php echo $details[0]['ADDRESS']?></div>
                        <div class="account__info">Title:  <?php echo $details[0]['TITLE']?></div>
                        <div class="account__info">Sent date:  <?php echo $details[0]['SDATE']?></div>
                        <div class="account__info">Status:  <?php if($details[0]['SOLVED'] == 1) {echo 'Solved';} else echo 'Not solved yet'?></div>
                        <div class="account__info">Content:  <?php echo $details[0]['CONTENT']?></div>
                    </div>
                </div>
                <div class="row" style="margin-top: 32px;">
                    <div class="col l-12 l-o-3">
                        <a style="margin: 0 auto ; display: inline-block" href="<?php echo BASE_URL?>/admin/solved/<?php echo $details[0]['RepID']?>"><button class="btn5-hover btn5 change__info__btn" style="margin-left: 180px">Confirm solved</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>