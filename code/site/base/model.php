<div id="model" class="model">

    <section class="contact <?php if (exist_param('login_err') || exist_param('register_err')) echo 'show' ?>" id="contact">

        <div class="container login <?php if (exist_param('login_err')) echo 'show' ?>">
            <div class="contact-mark"></div>
            <span class="closeLogin close">&times;</span>
            <div class="title">Sign in</div>
            <form action="../account/login.php" method="POST" id="form-login">
                <div class="user-details">
                    <div class="input-box <?php if (exist_param('login_err')) echo 'invalid' ?>">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Enter your username..." id="user-name" name="username" />
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                        <span class="form-message">
                            <?php if (exist_param('login_err')) echo 'Incorrect Username or Password ' ?>
                        </span>
                    </div>
                    <div class="input-box"></div>
                    <div class="input-box <?php if (exist_param('login_err')) echo 'invalid' ?>">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Passwords from 6 to 32 characters" id="password_login" name="password" />
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                        <span class="form-message"></span>
                    </div>
                    <div class="input-box imgLg">
                        <img src="<?= $ASSETS_URL ?>/images/logo.webp" alt="" />
                    </div>
                </div>

                <div class="config">
                    <a href=""> Forgot password ? </a>
                    <div class="gotoRegister">
                        Don't have an account? <span>registration</span>
                    </div>
                </div>

                <div class="button">
                    <input type="submit" value="Sign in" />
                </div>
                <div class="more">
                    <a href="" class="form-btn">
                        <img src="<?= $ASSETS_URL ?>/images/facebook-social.svg" alt="" />
                        <span>Sign in with Facebook</span>
                    </a>
                    <a href="" class="form-btn">
                        <img src="<?= $ASSETS_URL ?>/images/google-social.svg" alt="" />
                        <span> Sign in with Google</span>
                    </a>
                </div>
            </form>
        </div>

        <div class="container registration <?php if (exist_param('register_err')) echo 'show' ?>">
            <div class="contact-mark"></div>
            <span class="closeRegistration close">&times;</span>
            <div class="title">Sign up</div>
            <form action="../account/register.php" method="POST" id="form-registration">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First and last name</span>
                        <input type="text" placeholder="Enter your first and last name..." id="fullname" name="fullName" />
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                        <span class="form-message"></span>
                    </div>
                    <div class="input-box <?php if (exist_param('register_err')) echo 'invalid' ?>">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Enter your username...." id="username" name="username" />
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                        <span class="form-message">
                            <?php if (exist_param('register_err')) echo 'Username already exists' ?>
                        </span>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Passwords from 6 to 32 characters" id="password" name="pass" />
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                        <span class="form-message"></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm password</span>
                        <input type="password" placeholder="Enter the password...." id="password_confirmation" name="password_confirmation" />
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                        <span class="form-message"></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Email address</span>
                        <input type="email" placeholder="Enter your email address...." id="email" name="email" />
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                        <span class="form-message"></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone number</span>
                        <input type="text" placeholder="Enter your phone number..." id="number_phone" name="phone" />
                        <i class="fa fa-exclamation-circle"></i>
                        <a href="#" class="confirm">Send code</a>
                        <span class="form-message"></span>
                    </div>
                </div>
                <div class="gender-details input-box">
                    <input type="radio" name="gender" id="dot-1" value="0" />
                    <input type="radio" name="gender" id="dot-2" value="1" />
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                    </div>
                    <span class="form-message"></span>
                </div>
                <div class="button">
                    <input type="submit" value="Create Account" />
                </div>
            </form>
        </div>


    </section>
</div>