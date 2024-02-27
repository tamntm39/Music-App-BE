<?php 
include_once("DbService.php");
include_once("./Model/AlbumModel.php");
$DB = new DB();
$data = $DB->GetListAlbum();
$mangalbum = array();
while ($row = mysqli_fetch_assoc($data)) {
    $item = new Album
    (
        $row['IdAlbum'],
        $row['TenAlbum'],
        $row['TenCaSiAlbum'],
        $row['HinhAlbum']
    );
    array_push($mangalbum, $item);
}
echo json_encode($mangalbum);
?>