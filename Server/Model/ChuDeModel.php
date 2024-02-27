<?php
class ChuDe
{
    public $IdChuDe;
    public $TenChuDe;
    public $HinhChuDe;

    function __construct($IdChuDe, $TenChuDe, $HinhChuDe)
    {
        $this->IdChuDe = $IdChuDe;
        $this->TenChuDe = $TenChuDe;
        $this->HinhChuDe = $HinhChuDe; 
    }
}
?>