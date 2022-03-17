<section class="recentOrder">
    <div class="cardHeader">
        <h2>Edit Type</h2>
    </div>
    <form action="../productType/" method="POST" id="form-login">
        <div class="user-details">
            <div class="input-box readonly">
                <span class="details">ID Product Type</span>
                <input type="text" name="idType" value="<?= $idType ?>" readonly />
            </div>
            <div class="input-box">
                <span class="details">Name Product Type</span>
                <input type="text" name="nameType" value="<?= $nameType ?>" />
            </div>

            <div class="input-box">
                <span class="details">Categories</span>
                <select name="idCategory">
                    <?php foreach ($categoryList as $item) { ?>
                        <option value="<?= $item['idCategory'] ?>" <?php if ($item['idCategory'] == $idCategory) echo 'selected'; ?> > <?= $item['nameCategory'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class=" input-box">
                <span class="details">Ordinal</span>
                <input name="ordinal" type="number" value="<?= $ordinal ?>" />
            </div>
            <div class="input-box">
                <span class="details">Show Hide:</span>
                <select name="showHide">
                    <option value="0" <?php if ($showHide == 0) echo 'selected' ?>>Hide</option>
                    <option value="1" <?php if ($showHide == 1) echo 'selected' ?>>Show</option>
                </select>
            </div>
        </div>
        <div class="button">
            <button name="btn_update" class="btn sm-btn">Apply</button>
            <button type="reset" class="btn sm-btn">Reset</button>
            <a href="../productType/" class="btn sm-btn">List Type</a>
        </div>

    </form>
</section>