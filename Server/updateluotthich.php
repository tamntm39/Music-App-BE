<?php 
include_once("DbService.php");
include_once("./Model/BaiHatModel.php");
$DB = new DB();

if (isset($_POST["idbaihat"]) && isset($_POST["luotthich"])) {
    $idbaihat = $_POST['idbaihat'];
    $luotthich = $_POST['luotthich'];

    $dataBaiHat = $DB->GetBaiHatById($idbaihat); 
    $rowBaiHat = mysqli_fetch_assoc($dataBaiHat);
    $tongLuotThichHienTai = $rowBaiHat['Luotthich'];
    $tongLuotThichHienTai = $tongLuotThichHienTai + $luotthich;
    $rs = $DB->UpdateLuotThichBaiHat($idbaihat, $tongLuotThichHienTai);
    if ($rs) {
        echo 'Success';
    } else {
        echo 'Fail';
    }
}
?>