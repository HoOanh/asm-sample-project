<section class="recentOrder">
    <div class="cardHeader">
        <h2>Add Type</h2>
    </div>
    <form action="../productType/" method="POST" id="form-login">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Name Product Type</span>
                <input type="text" name="nameType" />
            </div>
            <div class="input-box">
                <span class="details">Categories</span>
                <select name="idCategory">
                    <?php foreach ($categoryList as $item) { ?>
                        <option value="<?= $item['idCategory'] ?>"><?= $item['nameCategory'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="input-box">
                <span class="details">Ordinal</span>
                <input name="ordinal" type="number" />
            </div>
            <div class="input-box">
                <span class="details">Show Hide:</span>
                <select name="showHide">
                    <option value="1" selected>Show</option>
                    <option value="0">Hide</option>
                </select>
            </div>

        </div>
        <div class="button">
            <button name="btn_insert" class="btn sm-btn">Apply</button>
            <button type="reset" class="btn sm-btn">Reset</button>
            <a href="../productType/" class="btn sm-btn">List Type</a>
        </div>

    </form>
</section>