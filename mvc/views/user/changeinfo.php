<div class="row account__manage__body">
            <div style="width: 100%; text-align:center; font-size: 30px; font-weight: 600; margin: 16px;">Change Infomation</div>
            <div class="grid" style="display: flex; flex-direction: column; ">
                <form action="<?php echo BASE_URL ?>/user/updateinfo" method="post">
                    <div class="row">
                        <div class="col l-4 m-4 c-12 account__avatar">
                            <img src="https://cdn3.iconfinder.com/data/icons/vector-icons-6/96/256-512.png" alt="" class="account__image">
                        </div>
                        <div class="col l-8 m-8 c-12" style="background-color:rgba(201,208,215,0.6); background-clip:content-box; padding:0 32px 0 32px;">
                                <div class="account__info">Full name: <input type="text" class="form__field" placeholder="fname" name="fname" id='fname' value="<?php echo $user[0]['FNAME']?>" required/></div>
                                <div class="account__info">Email: <input type="email" class="form__field" placeholder="email" name="email" id='email' value="<?php echo $user[0]['EMAIL']?>" required/></div>
                                <div class="account__info">Address: <input type="text" class="form__field" placeholder="address" name="address" id='address' value="<?php echo $user[0]['ADDRESS']?>" required/></div>
                                <div class="account__info">Phone number: <input type="text" class="form__field" placeholder="pnumber" name="pnumber" id='pnumber' value="<?php echo $user[0]['PNUMBER']?>" required></div>
                                <div class="account__info">Gas threshold limit: <input type="number" class="form__field" placeholder="gasbound" name="gasbound" id='gasbound' value="<?php echo $user[0]['GASBOUND']?>" required/></div>
                                <div class="account__info">Old Password: <input type="password" class="form__field" placeholder="oldpass" name="oldpass" id='oldpass' value="" required/></div>
                                <div class="account__info">New Password: <input type="password" class="form__field" placeholder="newpass" name="newpass" id='newpass' value="" required/></div>
                                <div class="account__info">Confirm Password: <input type="password" class="form__field" placeholder="confirmpass" name="confirmpass" id='confirmpass' value="" required/></div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn5-hover btn5 change__info__btn">Confirm</Button>
                </form>
        </div>

    </div>
