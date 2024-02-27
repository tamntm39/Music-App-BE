<?php
class Playlist
{
    public $IdPlaylist;
    public $Ten;
    public $HinhPlaylist;
    public $Icon;
    function __construct($IdPlaylist, $Ten, $Hinhnen, $Hinhicon)
    {
        $this->IdPlaylist = $IdPlaylist;
        $this->Ten = $Ten;
        $this->HinhPlaylist = $Hinhnen;
        $this->Icon = $Hinhicon;
    }
}
?>