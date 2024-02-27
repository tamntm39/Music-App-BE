<?php
class Quangcao
{
    public $IdQuangCao;
    public $HinhAnh;
    public $NoiDung;
    public $IdBaiHat;
    public $TenBaiHat;
    public $HinhBaiHat;
    function __construct($idquangcao, $hinhanh, $noidung, $idbaihat, $tenbaihat, $hinhbaihat)
    {
        $this->IdQuangCao = $idquangcao;
        $this->HinhAnh = $hinhanh;
        $this->NoiDung = $noidung;
        $this->IdBaiHat = $idbaihat;
        $this->TenBaiHat = $tenbaihat;
        $this->HinhBaiHat = $hinhbaihat;
    }
}
?>