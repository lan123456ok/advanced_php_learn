<form action="?action=update&controller=sinh_vien" method="POST">
    <input type="hidden" name="ma" value="<?php echo $each->get_ma(); ?>">
    Tên
    <input type="text" name="ten" value="<?php echo $each->get_ten(); ?>">
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
    <button>Sữa</button>
</form>