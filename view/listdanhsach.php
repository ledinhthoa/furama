<h2>Danh sách khách hàng</h2>
<a href="./index.php?page=add">Thêm mới</a>
<table class="table">
    <thead>
    <tr>
        <th>id dich vu</th>
        <th>ten dich vu</th>
        <th>dien tich dich vu</th>
        <th>so luong nguoi toi da</th>
        <th>gia thue</th>
        <th>kieu thue</th>
        <th>id loai</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($customers as $key => $customer): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $customer->tendichvu ?></td>
        <td><?php echo $customer->dientichdichvu?></td>
        <td><?php echo $customer->soluongnguoitoida ?></td>
        <td><?php echo $customer->giathue ?></td>
        <td><?php echo $customer->kieuthue ?></td>
        <td><?php echo $customer->loaidv_id ?></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $customer->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $customer->id; ?>" class="btn btn-sm">Update</a></td>
        <?php endforeach; ?>
    </tbody>
</table>
