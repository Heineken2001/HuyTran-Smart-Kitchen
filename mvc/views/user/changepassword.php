<div class="row account__manage__body">
            <div style="width: 100%; text-align:center; font-size: 30px; font-weight: 600; margin: 16px;">Change Password</div>
            <div class="grid" style="display: flex; flex-direction: column; ">
                <form action="<?php echo BASE_URL ?>/user/updatepassword/<?php echo $_SESSION['userid']?>" method="post" id="updateform">
                    <div class="row">
                        <div class="col l-12 m-12 c-12" style="background-color:rgba(201,208,215,0.6); background-clip:content-box; padding:0 32px 0 32px;">
                                <div class="account__info">Old Password: <input type="password" class="form__field" placeholder="oldpass" name="oldpass" id='oldpass' value="" required/></div>
                                <div class="account__info">New Password: <input type="password" class="form__field" placeholder="newpass" name="newpass" id='newpass' value="" required/></div>
                                <div class="account__info">Confirm Password: <input type="password" class="form__field" placeholder="confirmpass" name="confirmpass" id='confirmpass' value="" required/></div>
                                <p style="color: red; margin-top: 16px;">
                                    <?php 
                                        if (isset($_SESSION["notice"])) {
                                            echo $_SESSION["notice"];
                                            unset($_SESSION["notice"]); 
                                        }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn5-hover btn5 change__info__btn">Confirm</Button>
                </form>
        </div>

    </div>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        var confirmpass = $('#confirmpass');
        var newpass = $('#newpass');
        var oldpass = $('#oldpass').val();

        $('.btn5').click(function(e) {
            e.preventDefault();
            
                if (confirmpass.val() == newpass.val()) {
                    $('#updateform').submit();
                }
                else alert('Invalid confirmed password');
            
        })
    })
</script>