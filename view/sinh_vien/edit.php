<form action="?action=store&controller=sinh_vien" method="post">
    Tên
    <input type="text" name="ten" value="<?php echo $each['ten']; ?>">
    <br>
    Lớp
    <select name="ma_lop" >
        <?php foreach($lops as $lop){?>
            <option value="<?php echo $lop['ma']; ?>" <?php if ($lop['ma'] === $each['ma_lop']){echo 'checked';} ?>>
                <?php echo $lop['ten']; ?>
            </option>
        <?php } ?>
    </select>
    <br>
    <button>Thêm</button>
</form>