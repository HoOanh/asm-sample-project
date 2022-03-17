<!-- oder details list -->
<div class="recentOrder">
    <div class="cardHeader">
        <h2>Manage Product</h2>
        <div class="ctl">
            <a href="?btn_add" class="ad-btn">Add new Product</a>
            <a href="?btn_viewAll" class="ad-btn">View All</a>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Price</td>
                <td>View</td>
                <td>Control</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($productList as $item) { ?>
                <tr>
                    <td><?= $item['nameProduct'] ?></td>
                    <td><?= $item['price'] ?></td>
                    <td><?= $item['view'] ?></td>
                    <td>
                        <a href="?btn_edit&idPr=<?= $item['idProduct'] ?>" class="status edit"> Edit </a>
                        <a href="?btn_del&idPr=<?= $item['idProduct'] ?>" class="status delete" onclick="return confirm('Bạn đã chắc chắn muốn xóa chưa?')"> Delete </a>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>