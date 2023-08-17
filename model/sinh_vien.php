<?php
require_once 'model/connect.php';


function sinh_vien_index() {
    $connect = connect();
    $sql = "select sv.*,l.ten as ten_lop from sinh_vien sv
            left join lop l on sv.ma_lop = l.ma";
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);

    return $result;
}

function sinh_vien_store($ten,$ma_lop) {
    $connect = connect();
    $sql = "insert into sinh_vien(ten,ma_lop) values ('$ten','$ma_lop')";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}

function sinh_vien_edit($ma) {
    $connect = connect();

    $sql = "select * from sinh_vien where ma = '$ma'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);
    mysqli_close($connect);

    return $each;
}

function sinh_vien_update($ma, $ten, $ma_lop) {
    $connect = connect();
    $sql = "update sinh_vien 
            set ten = '$ten'
                ma_lop = '$ma_lop'
            where ma = '$ma'";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}

function sinh_vien_delete($ma) {
    $connect = connect();
    $sql = "delete from sinh_vien where ma = '$ma'";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}

