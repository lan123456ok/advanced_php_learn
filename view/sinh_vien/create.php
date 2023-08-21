<form action="?action=store&controller=sinh_vien" method="POST">
    Tên
    <input type="text" name="ten">
    <br>
    Tên lớp
    <select name="ma_lop" >
        <?php foreach ($lops as $lop): ?>
            <option value="<?php echo $lop->get_ma(); ?>">
                <?php echo $lop->get_ten(); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br>
    <button>Thêm</button>
</form>