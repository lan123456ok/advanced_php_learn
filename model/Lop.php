<?php

require 'model/Connect.php';
require 'model/LopObject.php';

class Lop
{
    public function all() : array
    {
        $sql = "SELECT * FROM lop";
        $result = (new Connect())->select($sql);

        $arr = [];
        foreach ($result as $row) {
            $object = new LopObject($row);

            $arr[] = $object;
        }
        return $arr;
    }

    public function create($params) : void
    {
        $object = new LopObject($params);
        $sql = "INSERT INTO lop (truong,ten) VALUES ('" . $object->get_truong() . "','" . $object->get_ten() . "')";
        (new Connect())->execute($sql);
    }

    public function find($ma) : object
    {
        $sql = "SELECT * FROM lop WHERE ma = '$ma'";
        $result = (new Connect())->select($sql);
        $each = mysqli_fetch_array($result);

        return new LopObject($each);
    }

    public function update(array $params)
    {
        $object = new LopObject($params);
        $sql = "update lop
                set truong = '" . $object->get_truong() . "',
                ten = '" . $object->get_ten() . "'
                where ma = '" . $object->get_ma() . "'";
        (new Connect())->execute($sql);
    }

    public function delete($ma): void
    {
        $sql = "DELETE FROM lop WHERE ma = '$ma'";
        (new Connect())->execute($sql);
    }
}