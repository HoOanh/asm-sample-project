<!-- oder details list -->
<div class="recentOrder">
    <div class="cardHeader">
        <h2>Manage Product Types</h2>
        <div class="ctl">
            <a href="?btn_add" class="ad-btn">Add new Type</a>
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
            foreach ($typeList as $item) { ?>
                <tr>
                    <td><?= $item['idType'] ?></td>
                    <td><?= $item['nameType'] ?></td>
                    <td><?= $item['showHide'] == 0 ? 'Hiding...' : 'Showing...' ?></td>
                    <td>
                        <a href="?btn_edit&idPrt=<?= $item['idType'] ?>" class="status edit"> Edit </a>
                        <a href="?btn_del&idPrt=<?= $item['idType'] ?>" class="status delete" onclick="return confirm('Bạn đã chắc chắn muốn xóa chưa?')"> Delete </a>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>