<?php
class BaiHat
{
    public $IdBaiHat;
    public $TenBaiHat;
    public $HinhBaiHat;
    public $CaSi;
    public $LinkBaiHat;
    public $LuotThich;

    function __construct($IdBaiHat, $TenBaiHat, $HinhBaiHat, $CaSi, $LinkBaiHat, $LuotThich)
    {
        $this->IdBaiHat = $IdBaiHat;
        $this->TenBaiHat = $TenBaiHat;
        $this->HinhBaiHat = $HinhBaiHat; 
        $this->CaSi = $CaSi; 
        $this->LinkBaiHat = $LinkBaiHat; 
        $this->LuotThich = $LuotThich; 
    }
}
?>