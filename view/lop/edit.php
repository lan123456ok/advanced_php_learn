<form action="?action=update" method="POST">
    <input type="hidden" name="ma" value="<?php echo $each->get_ma(); ?>">
    Trường
    <input type="text" name="truong" value="<?php echo $each->get_truong(); ?>">
    <br>
    Tên
    <input type="text" name="ten" value="<?php echo $each->get_ten(); ?>">
    <br>
    <button>Sữa</button>
</form>