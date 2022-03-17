<!-- oder details list -->
<div class="recentOrder">
    <div class="cardHeader">
        <h2>Manage Categories</h2>
        <div class="ctl">
            <a href="?btn_add" class="ad-btn">Add new Category</a>
            <a href="?btn_viewAll" class="ad-btn">View All</a>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Show / Hide</td>
                <td>Control</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($categoryList as $item) { ?>
                <tr>
                    <td><?= $item['idCategory'] ?></td>
                    <td><?= $item['nameCategory'] ?></td>
                    <td><?= $item['showHide'] == 0 ? 'Hiding...' : 'Showing...' ?></td>
                    <td>
                        <a href="?btn_edit&idCtg=<?= $item['idCategory'] ?>" class="status edit"> Edit </a>
                        <a href="?btn_del&idCtg=<?= $item['idCategory'] ?>" class="status delete" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"> Delete </a>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>