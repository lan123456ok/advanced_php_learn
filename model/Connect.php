<?php

class Connect
{
    private $host;
    private $user;
    private $pass;
    private $db;
    private function cnt()
    {
        $connect = mysqli_connect('localhost', 'root', '', 'test_2');
        mysqli_set_charset($connect, 'utf8');

        return $connect;
    }

    public function select($sql){
        $connect = $this->cnt();
        $result = mysqli_query($connect, $sql);
        mysqli_close($connect);

        return $result;
    }

    public function execute($sql): void
    {
        $connect = $this->cnt();
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }

}