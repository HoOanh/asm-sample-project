<section class="recentOrder">
    <div class="cardHeader">
        <h2>Edit category</h2>
    </div>
    <form action="../category/" method="POST" id="form-login">
        <div class="user-details">
            <div class="input-box readonly">
                <span class="details">ID Product Category</span>
                <input type="text" name="idCategory" value="<?= $idCategory ?>" readonly />
            </div>
            <div class="input-box">
                <span class="details">Name Product Category</span>
                <input type="text" name="nameCategory" value="<?= $nameCategory ?>" />
            </div>

            <div class="input-box">
                <span class="details">Ordinal</span>
                <input name="ordinal" type="number" value="<?= $ordinal ?>" />
            </div>
            <div class="input-box">
                <span class="details">Show Hide:</span>
                <select name="showHide">
                    <option value="0" <?php if ($showHide == 0) echo 'checked' ?>>Show</option>
                    <option value="1" <?php if ($showHide == 1) echo 'checked' ?>>Hide</option>
                </select>
            </div>
        </div>
        <div class="button">
            <button name="btn_update" class="btn sm-btn">Apply</button>
            <button type="reset" class="btn sm-btn">Reset</button>
            <a href="../category/" class="btn sm-btn">List Category</a>
        </div>

    </form>
</section>