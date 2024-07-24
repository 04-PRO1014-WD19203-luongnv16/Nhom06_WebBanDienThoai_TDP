<?php


function insert_bill_detail($iduser, $idbill, $idpro, $img, $name, $soluong, $price, $thanhtien) {
    $sql = "INSERT INTO bill_detail (iduser, idbill, idpro, img, name, soluong, price, thanhtien) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    return pdo_execute($sql, $iduser, $idbill, $idpro, $img, $name, $soluong, $price, $thanhtien);
}

function load_bill_detail_by_id($idbill) {
    $sql = "SELECT * FROM bill_detail WHERE idbill = ?"; 
    return pdo_query($sql, $idbill);
}

?>
