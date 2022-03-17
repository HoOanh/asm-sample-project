<div class="navbar__control-client">
    <?php
    $name = explode(' ', $_SESSION['user']['fullName']);
    if (isset($_SESSION['user'])) { ?>
        <div class="navbar__link ac">
            <p><?= $name[0] ?></p>
        </div>
        <div class="dropdown">
            <ul>
                <li class="link">
                    <a href="../account/logout.php"><span>Log out</span></a>
                </li>
                <li class="login-link">
                    <a href=""><span>Change password</span></a>
                </li>
                <?php if ($_SESSION['user']['role']) { ?>
                    <li class="login-link">
                        <a href="<?= $ADMIN_URL ?>"><span>Website management</span></a>
                    </li>
                <?php  } ?>
            </ul>
        </div>

    <?php } else { ?>

        <i class="far fa-user"></i>
        <div class="dropdown">
            <ul>
                <li class="login-link">
                    <i class="fas fa-sign-in-alt"></i><span>Login</span>
                </li>
                <li class="register-link">
                    <i class="fas fa-user-plus"></i><span>Register</span>
                </li>
            </ul>
        </div>
    <?php  } ?>
</div>