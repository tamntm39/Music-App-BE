<?php
include_once("DbService.php");
include_once("./Model/BaiHatModel.php");
$DB = new DB();
if (isset($_POST["idquangcao"])) {
    $idQuangCao = $_POST['idquangcao'];
    $dataQuangCao = $DB->GetQuangCaoById($idQuangCao);
    $rowQuangCao = mysqli_fetch_assoc($dataQuangCao);
    $idBaiHat = $rowQuangCao['Idbaihat'];
    if ($idBaiHat != '') {
        $dataBaiHat = $DB->GetBaiHatById($idBaiHat); 
    }
}

if (isset($_POST["idplaylist"])) {
    $idPlaylist = $_POST['idplaylist'];
    $dataBaiHat = $DB->GetBaiHatByIdPlaylist($idPlaylist); 
}

if (isset($_POST["idalbum"])) {
    $idAlbum = $_POST['idalbum'];
    $dataBaiHat = $DB->GetBaiHatByIdAlbum($idAlbum); 
}

$arraydanhsachbaihat = array();

while ($row = mysqli_fetch_assoc($dataBaiHat)) {
    $item = new Baihat
    (
        $row['IdBaiHat'],
        $row['TenBaiHat'],
        $row['HinhBaiHat'],
        $row['CaSi'],
        $row['LinkBaiHat'],
        $row['Luotthich']
    );
    array_push($arraydanhsachbaihat, $item);
}
echo json_encode($arraydanhsachbaihat);
?>