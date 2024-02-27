<?php 
include_once("DbService.php");
include_once("./Model/QuangCaoModel.php");
$DB = new DB();
$data = $DB->GetListQuangCao();
$mangquangcao = array();
while ($row = mysqli_fetch_assoc($data)) {
    $item = new Quangcao
    (
        $row['Id'],
        $row['Hinhanh'],
        $row['Noidung'],
        $row['Idbaihat'],
        $row['TenBaiHat'],
        $row['HinhBaiHat']
    );
    array_push($mangquangcao, $item);
}
echo json_encode($mangquangcao);
?>