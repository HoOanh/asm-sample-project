<section class="recentOrder">
    <div class="cardHeader">
        <h2>Add new Product</h2>
    </div>
    <form action="../products/" method="POST" id="form-login">
        <div class="user-details">
            <div class="input-box readonly">
                <span class="details">ID Product</span>
                <input type="text" name="idProduct" value="<?= $idProduct ?>" readonly />
            </div>
            <div class="input-box">
                <span class="details">Name Product</span>
                <input type="text" name="nameProduct" value="<?= $nameProduct ?>" />
            </div>
            <div class="input-box">
                <span class="details">Price</span>
                <input type="text" name="price" value="<?= $price ?>" />
            </div>

            <div class="input-box">
                <span class="details">Highlight</span>
                <select name="highlight">
                    <option value="0" <?php if ($highlight == 0) echo 'selected'; ?>>No highlight</option>
                    <option value="1" <?php if ($highlight == 1) echo 'selected'; ?>>Highlight</option>
                </select>
            </div>

            <div class="input-box">
                <span class="details">Type</span>
                <select name="idType">
                    <?php foreach ($typeList as $row) { ?>
                        <option value="<?= $row['idType'] ?>" <?php if ($row['idType'] == $idType) echo 'selected'; ?>><?= $row['nameType'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="input-box">
                <span class="details">Content</span>
                <textarea name="content"><?= $content ?></textarea>
            </div>

        </div>
        <div class=" button">
            <button name="btn_update" class="btn sm-btn">Apply</button>
            <button type="reset" class="btn sm-btn">Reset</button>
            <a href="../products/" class="btn sm-btn">List Type</a>
        </div>

    </form>
</section>