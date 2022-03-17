<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PS15410 || Admin</title>
    <!-- reset normalize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style link -->
    <link rel="stylesheet" href="<?= $VENDOR_URL ?>/grid_sytem/css/style.min.css" />
    <link rel="stylesheet" href="<?= $ASSETS_URL ?>/css/style.min.css">
    <script src="<?= $ASSETS_URL ?>/js/jQuery/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="admin">
        <div class="contain">
            <?php require 'nav.php' ?>
        </div>

        <div class="main_">
            <div class="topbar">
                <div class="toggle">
                    <i class="fas fa-bars"></i>
                </div>

                <!-- search -->
                <div class="search">
                    <label for="">
                        <input type="text" name="search" placeholder="Search here....." />
                        <i class="fas fa-search"></i>
                    </label>
                </div>

                <!-- userImg -->

                <div class="user">
                    <img src="<?= $ASSETS_URL ?>/images/admin/user-default.png" alt="" />
                </div>
            </div>
            <?php if ($VIEW_NAME == 'dashboard/home.php') { ?>

                <!-- cards -->
                <div class="cardBox">
                    <div class="card">
                        <div>
                            <div class="numbers">1,504</div>
                            <div class="cardName">Daily Views</div>
                        </div>

                        <div class="iconBox">
                            <i class="far fa-eye"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">2,600</div>
                            <div class="cardName">Comments</div>
                        </div>

                        <div class="iconBox">
                            <i class="fas fa-comments"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">150</div>
                            <div class="cardName">Daily Oder</div>
                        </div>

                        <div class="iconBox">
                            <i class="fas fa-donate"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">30</div>
                            <div class="cardName">Sale</div>
                        </div>

                        <div class="iconBox">
                            <i class="fas fa-cart-arrow-down"></i>
                        </div>
                    </div>
                </div>

                <!-- chart -->

                <div class="graphBox">

                    <div class="box">
                        <canvas id="myChart"></canvas>
                    </div>

                    <div class="box">
                        <canvas id="earning"></canvas>
                    </div>
                </div>
            <?php } ?>
            <div class="detail">
                <?php require $VIEW_NAME; ?>
            </div>
        </div>
    </div>
</body>

<script src="<?= $ASSETS_URL ?>/js/admin.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
<script src="<?= $ASSETS_URL ?>/js/my-chart.js"></script>

</html>