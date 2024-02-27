<?php
class Album
{
    public $IdAlbum;
    public $TenAlbum;
    public $TenCaSi;
    public $HinhAlbum;
     function __construct($IdAlbum, $TenAlbum, $TenCaSiAlbum, $HinhAlbum)
    {
        $this->IdAlbum = $IdAlbum;
        $this->TenAlbum = $TenAlbum;
        $this->TenCaSi = $TenCaSiAlbum;
        $this->HinhAlbum = $HinhAlbum;
    }
}
?>