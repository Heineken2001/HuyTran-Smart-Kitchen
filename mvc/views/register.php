
    <style>
        /* @media (min-width: 1024px) and (max-width: 1239px) {
            .login__header {
                display: flex;
            }
        } */
        @media (max-width:739px) {
            .login__header__nav {
                display: none;
            }
            .login__header__brand {
                width: 100%;
                text-align: center;
            }
        }
    </style>
    <div class="grid wide container">
        <div class="row margintopbig">
            <form class="col l-5 m-8 c-12" id="form-register" method="POST" action="<?php echo BASE_URL ?>/register/create">
                <h3>Register</h3>
                <h1 class="margintopnormal">CREATE NEW ACCOUNT</h1>
                <h4 class="margintopnormal">Already A Member? <a href="<?php echo BASE_URL ?>/login">Log In</a></h4>
                <div class="form__group field" style="margin-top: 50px;">
                    <input type="text" class="form__field" placeholder="Full Name" name="fname" id='fname' required />
                    <label for="fname" class="form__label">Full Name</label>
                </div>
                <div class="form__group field">
                    <input type="text" class="form__field" placeholder="Username" name="username" id='username' required />
                    <label for="username" class="form__label">Username</label>
                </div>
                <div class="form__group field">
                    <input type="email" class="form__field" placeholder="Email" name="email" id='email' required />
                    <label for="email" class="form__label">Email</label>
                </div>
                <div class="form__group field">
                    <input type="password" class="form__field" placeholder="Password" name="password" id='password' required />
                    <label for="password" class="form__label">Password</label>
                </div>
                <div class="form__group field">
                    <input type="password" class="form__field" placeholder="Password" name="confirmpassword" id='confirmpassword' required />
                    <label for="confirmpassword" class="form__label">Confirm Password</label>
                </div>
                <button type="submit" class="btn5-hover btn5">Sign In</Button>
            </form>
        </div>
    </div>