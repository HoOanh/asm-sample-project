<section class="recentOrder">
    <div class="cardHeader">
        <h2>Add new Product</h2>
    </div>
    <form action="../products/" method="POST" id="form-login" enctype="multipart/form-data">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Name Product</span>
                <input type="text" name="nameProduct" />
            </div>

            <div class="input-box">
                <span class="details">Price</span>
                <input type="text" name="price" />
            </div>

            <div class="input-box">
                <span class="details">Highlight</span>
                <select name="highlight">
                    <option value="0">No highlight</option>
                    <option value="1" selected>Highlight</option>
                </select>
            </div>

            <div class="input-box">
                <span class="details">Type</span>
                <select name="idType">
                    <?php foreach ($typeList as $row) { ?>
                        <option value="<?= $row['idType'] ?>"><?= $row['nameType'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="input-box">
                <span class="details">Content</span>
                <textarea name="content"></textarea>
            </div>

        </div>
        <div class="button">
            <button name="btn_insert" class="btn sm-btn">Apply</button>
            <button type="reset" class="btn sm-btn">Reset</button>
            <a href="../products/" class="btn sm-btn">List Type</a>
        </div>

    </form>
</section>