<?php
class TheLoai
{
    public $IdTheLoai;
    public $IdKeyChuDe;
    public $TenTheLoai;
    public $HinhTheLoai;
 
    function __construct($IdTheLoai, $IdKeyChuDe, $TenTheLoai, $HinhTheLoai)
    {
        $this->IdTheLoai = $IdTheLoai;
        $this->IdKeyChuDe = $IdKeyChuDe;
        $this->TenTheLoai = $TenTheLoai;
        $this->HinhTheLoai = $HinhTheLoai;
    }
}
?>