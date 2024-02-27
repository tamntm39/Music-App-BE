<?php 
include_once("DbService.php");
include_once("./Model/PlayListModel.php");
$DB = new DB();
$data = $DB->GetPlaylistToday();
$danhsachplaylist = array();
while ($row = mysqli_fetch_assoc($data)) {
    $item = new Playlist
    (
        $row['IdPlaylist'],
        $row['Ten'],
        $row['Hinhnen'],
        $row['Hinhicon'] 
    );
    array_push($danhsachplaylist, $item);
}
echo json_encode($danhsachplaylist);
?>