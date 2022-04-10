<div class="grid wide container">
    <div class="row margintopbig">
        <form class="col l-5 m-8 c-12" id="form-register" method="POST" action="<?php echo BASE_URL ?>/login/checklogin">
            <h1 class="margintopnormal">Login</h1>
            <h4 class="margintopnormal">Don't have an account? <a href="<?php echo BASE_URL ?>/register">Sign Up</a></h4>
            <div class="form__group field" style="margin-top: 50px;">
                <input type="text" class="form__field" placeholder="Username" name="username" id='username' value=""/>
                <label for="username" class="form__label">Username</label>
            </div>
            <div class="form__group field">
                <input type="password" class="form__field" placeholder="Password" name="password" id='password' value=""/>
                <label for="password" class="form__label">Password</label>
            </div>
            <p style="color: red; margin-top: 16px;">
                <?php 
                    if (isset($_SESSION["notice"])) {
                        echo $_SESSION["notice"];
                        unset($_SESSION["notice"]); 
                    }
                ?>
            </p>
            <a href="#"><button type="submit" class="btn5-hover btn5">Sign In</Button></a>
        </form>
    </div>
</div>