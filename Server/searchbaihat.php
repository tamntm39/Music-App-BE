<?php 
include_once("DbService.php");
include_once("./Model/BaiHatModel.php");
$DB = new DB();

if (isset($_POST["tukhoa"])) {
    $tukhoa = $_POST['tukhoa'];
    $dataBaiHat = $DB->GetBaiHatByTuKhoa($tukhoa); 
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