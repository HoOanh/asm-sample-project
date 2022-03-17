<?php require 'base/head.php' ?>

<body>
    <?php require 'base/model.php' ?>

    <div id="main">
        <?php require 'base/header.php' ?>

        <main>

            <?php require $VIEW_NAME ?>


            <div class="maxim">
                <div class="maxim-icon">
                    <img src="<?= $ASSETS_URL ?>/images/xquote.webp" alt="" />
                </div>
                <p class="maxim-content">
                    “I just wanted to say thank you for making such gorgeous
                    arrangements for our birthday celebration. I couldn’t get over how
                    perfect they were for the party. You did a fantastic job, and I
                    appreciate it very much”
                </p>
                <h4 class="small-title">Alejandro Houston</h4>
                <span>Businessman</span>
            </div>

        </main>


        <?php require 'base/footer.php' ?>

    </div>
</body>

<script src="<?= $ASSETS_URL ?>/js/jQuery/jquery-3.6.0.min.js"></script>
<script src="<?= $ASSETS_URL ?>/js/jQuery/select.js"></script>
<script src="<?= $ASSETS_URL ?>/js/form-validate.js"></script>
<script src="<?= $ASSETS_URL ?>/js/main.js"></script>

</html>