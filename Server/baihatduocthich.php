<?php 
include_once("DbService.php");
include_once("./Model/BaiHatDuocThichModel.php");
$DB = new DB();
$data = $DB->GetBaihathotToday();
$danhsachbaihatyeuthich = array();
while ($row = mysqli_fetch_assoc($data)) {
    $item = new Baihat
    (
        $row['IdBaiHat'],
        $row['TenBaiHat'],
        $row['HinhBaiHat'],
        $row['CaSi'],
        $row['LinkBaiHat'],
        $row['Luotthich'] 
    );
    array_push($danhsachbaihatyeuthich, $item);
}
echo json_encode($danhsachbaihatyeuthich);
?>