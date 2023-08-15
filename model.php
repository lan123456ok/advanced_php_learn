<?php
    $connect = mysqli_connect('localhost','root','','test_2');
    mysqli_set_charset($connect,'utf8');

    $sql = "SELECT * from mon_an where ten_mon_an = '$mon'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);