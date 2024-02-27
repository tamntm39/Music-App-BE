<?php 
include_once("DbService.php");
include_once("./Model/AlbumHotModel.php");
$DB = new DB();
$data = $DB->GetAlbumhotToday();
$danhsachalbum = array();
while ($row = mysqli_fetch_assoc($data)) {
    $item = new Album
    (
        $row['IdAlbum'],
        $row['TenAlbum'],
        $row['TenCaSiAlbum'],
        $row['HinhAlbum']
    );
    array_push($danhsachalbum, $item);
}
echo json_encode($danhsachalbum);
?>