<div class="grid wide container">
    <div class="row margintopbig">
        <form class="col l-5 m-8 c-12" id="form-register" method="POST" action="<?php echo BASE_URL ?>/forgotpassword/validate">
            <h1 class="margintopnormal">Account recovery</h1>
            <div class="form__group field" style="margin-top: 50px;">
                <input type="username" class="form__field" placeholder="Username" name="username" id='username' value="" required/>
                <label for="username" class="form__label">Username</label>
            </div>
            <div class="form__group field">
                <input type="email" class="form__field" placeholder="Email" name="email" id='email' value="" required/>
                <label for="email" class="form__label">Email</label>
            </div>
            <p style="color: red; margin-top: 16px;">
                <?php 
                    if (isset($_SESSION["notice"])) {
                        echo $_SESSION["notice"];
                        unset($_SESSION["notice"]); 
                    }
                ?>
            </p>
            <h4 class="margintopnormal">Don't have an account yet? <a href="<?php echo BASE_URL ?>/register">Sign Up Now</a></h4>
            <h4 class="margintopnormal">Already A Member? <a href="<?php echo BASE_URL ?>/login">Log In</a></h4>
            <a href="#"><button type="submit" class="btn5-hover btn5">Send Token</Button></a>
        </form>
    </div>
</div>