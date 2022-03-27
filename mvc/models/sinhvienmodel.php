<?php
class sinhvienModel extends DB {
    public function getSV() 
    {
        return "SV Models";
    }
    public function tong($a, $b)   
    {
        return $a + $b;
    }

    public function dssv()
    {
        $qr = "SELECT * FROM sinhvien";
        $result = mysqli_query($this->conn, $qr);
        return $result;
    }
}