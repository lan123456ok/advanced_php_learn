<h1>
    Danh sách lớp
</h1>
<a href="?action=create&controller=lop">
    Thêm
</a>
<table border="1" width="75%">
    <tr>
        <th>Mã</th>
        <th>Tên lớp</th>
        <th>Sữa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each) { ?>
        <tr>
            <td>
                <?php echo $each['ma']; ?>
            </td>

            <td>
                <?php echo $each['ten'];?>
            </td>

            <td>
                <a href="?action=edit&controller=lop&ma=<?php echo $each['ma']; ?>">Sữa</a>
            </td>
            <td>
                <a href="?action=delete&controller=lop&ma=<?php echo $each['ma']; ?>">Xóa</a>
            </td>
        </tr>
    <?php } ?>
</table>