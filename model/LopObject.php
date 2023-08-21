<?php

class LopObject
{
    private $ma;
    private $truong;
    private $ten;

    public function __construct($row)
    {
        $this->ma = $row['ma'] ?? '';
        $this->truong = $row['truong'] ?? '';
        $this->ten = $row['ten'] ?? '';
    }

    public function get_ma(){
        return $this->ma;
    }
    public function set_ma($var){
        $this -> ma = $var;
    }
    
    public function get_truong(){
        return $this->truong;
    }
    public function set_truong($var){
        $this -> truong = $var;
    }
    
    public function get_ten(){
        return $this->ten;
    }
    public function set_ten($var){
        $this -> ten = $var;
    }
}