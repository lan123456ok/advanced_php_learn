<?php

require_once 'model/Connect.php';
require 'model/SinhVienObject.php';

class SinhVien
{
    private $table = 'sinh_vien';
    public function all() : array
    {
        $sql = "SELECT sv.*,l.ten as ten_lop
                FROM $this->table sv
                join lop l on l.ma = sv.ma_lop";
//        die($sql);
        $result = (new Connect())->select($sql);

        $arr = [];
        foreach ($result as $row) {
            $object = new SinhVienObject($row);

            $arr[] = $object;
        }
        return $arr;
    }

    public function create($params) : void
    {
        $object = new SinhVienObject($params);

        $sql = "INSERT INTO sinh_vien (ten,ma_lop) VALUES ('" . $object->get_ten() . "','" . $object->get_ma_lop() . "')";
        (new Connect())->execute($sql);
    }

    public function find($ma) : object
    {
        $sql = "SELECT * FROM sinh_vien WHERE ma = '$ma'";
        $result = (new Connect())->select($sql);
        $each = mysqli_fetch_array($result);

        return new SinhVienObject($each);
    }

    public function update(array $params) : void
    {
        $object = new SinhVienObject($params);
        $sql = "update sinh_vien
                set ma_lop = '" . $object->get_ma_lop() . "',
                ten = '" . $object->get_ten() . "'
                where ma = '" . $object->get_ma() . "'";
        (new Connect())->execute($sql);
    }

    public function delete($ma): void
    {
        $sql = "DELETE FROM sinh_vien WHERE ma = '$ma'";
        (new Connect())->execute($sql);
    }
}