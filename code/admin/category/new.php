<section class="recentOrder">
    <div class="cardHeader">
        <h2>Add category</h2>
    </div>
    <form action="../category/" method="POST" id="form-login">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Name Product Category</span>
                <input type="text" name="nameCategory" />
            </div>
            <div class="input-box">
                <span class="details">Ordinal</span>
                <input name="ordinal" type="number" />
            </div>
            <div class="gender-details input-box">
                <input type="radio" name="showHide" id="dot-1" value="0" />
                <input type="radio" name="showHide" id="dot-2" value="1" checked />
                <div class="category">
                    <span class="gender-title">Show Hide:</span>
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Hide</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Show</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="button">
            <button name="btn_insert" class="btn sm-btn">Apply</button>
            <button type="reset" class="btn sm-btn">Reset</button>
            <a href="../category/" class="btn sm-btn">List Category</a>
        </div>

    </form>
</section>