<?php
class Album
{
    public $IdAlbum;
    public $TenAlbum;
    public $TenCaSi;
    public $HinhAlbum;
    function __construct($IdAlbum, $TenAlbum, $TenCaSi, $HinhAlbum)
    {
        $this->IdAlbum = $IdAlbum;
        $this->TenAlbum = $TenAlbum;
        $this->TenCaSi = $TenCaSi;
        $this->HinhAlbum = $HinhAlbum;
    }
}
?>