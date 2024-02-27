<?php
include_once("DataProvider.php");
class DB
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
    function GetListQuangCao()
	{
		$sql="SELECT qc.Id, qc.Hinhanh, qc.Noidung, qc.Idbaihat, bh.TenBaiHat, bh.HinhBaiHat
        FROM `baihat` as bh INNER JOIN `quangcao` as qc ON qc.Idbaihat = bh.IdBaiHat WHERE qc.Idbaihat = bh.IdBaiHat";
		return $this->da->ExecuteQuery($sql);
	} 
	function GetPlaylistToday()
	{
		$sql="select * from playlist";
		return $this->da->ExecuteQuery($sql);
	}
	function GetListAlbum()
	{
		$sql="select * from album";
		return $this->da->ExecuteQuery($sql);
	}
	function GetListPlaylist()
	{
		$sql="select * from playlist";
		return $this->da->ExecuteQuery($sql);
	}
	function GetAlbumhotToday()
	{
		$sql="select * from album";
		return $this->da->ExecuteQuery($sql);
	}
	function GetBaihathotToday()
	{
		$sql="select * from baihat";
		return $this->da->ExecuteQuery($sql);
	}

	function GetQuangCaoById($idQuangCao)
	{
		$sql="select * from quangcao where Id = '$idQuangCao'";
		return $this->da->ExecuteQuery($sql);
	}
	function GetBaiHatById($idBai)
	{
		$sql="select * from baihat where IdBaiHat = '$idBai'";
		return $this->da->ExecuteQuery($sql);
	}
	function GetBaiHatByIdPlaylist($idPlaylist)
	{
		$sql="select * from baihat where FIND_IN_SET('$idPlaylist', IdPlaylist)";
		return $this->da->ExecuteQuery($sql);
	}
	function GetBaiHatByIdAlbum($idAlbum)
	{
		$sql="select * from baihat where FIND_IN_SET('$idAlbum', IdAlbum)";
		return $this->da->ExecuteQuery($sql);
	}
	function GetBaiHatByTuKhoa($tuKhoa)
	{
		$sql="select * from baihat where lower(TenBaiHat) like '%$tuKhoa%'";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateLuotThichBaiHat($idBaiHat, $tongLuotThich)
	{
		$sql="update baihat set LuotThich = '$tongLuotThich' where IdBaiHat = '$idBaiHat'";
		return $this->da->ExecuteQuery($sql);
	}
}