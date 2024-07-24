<?php

function insert_bill($iduser, $hoten, $diachi, $sdt, $email, $pttt, $ngaydathang, $total, $trangthai) {
    $sql = "INSERT INTO bill (iduser, hoten, diachi, sdt, email, pttt, ngaydathang, total, trangthai) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    return pdo_execute_return_lastInsertId($sql, $iduser, $hoten, $diachi, $sdt, $email, $pttt, $ngaydathang, $total, $trangthai);
}


function insert_bill_detail($idbill, $idpro, $soluong, $price, $thanhtien) {
    $sql = "INSERT INTO bill_detail (idbill, idpro, soluong, price, thanhtien) VALUES (?, ?, ?, ?, ?)";
    pdo_execute($sql, $idbill, $idpro, $soluong, $price, $thanhtien);
}


function load_all_bill_by_user($iduser) {
    $sql = "SELECT * FROM bill WHERE iduser = ?";
return pdo_query($sql, $iduser);
}

function load_bill_by_user($iduser) {
    $sql = "SELECT * FROM bill WHERE iduser = $iduser ORDER BY ngaydathang DESC";
    return pdo_query($sql);
}

function load_bill_details($idbill) {
    $sql = "SELECT * FROM bill_detail WHERE idbill = ?";
    return pdo_query($sql, $idbill);
}

function clear_cart($iduser) {
    $sql = "DELETE FROM cart WHERE iduser = ? AND idbill = 0";
    pdo_execute($sql, $iduser);
}

function load_bill_by_id($id) {
    $sql = "SELECT * FROM bill WHERE id = $id";
    return pdo_query_one($sql);
}

function load_all_orders() {
    $sql = "SELECT * FROM bill ORDER BY id DESC";
    $order = pdo_query($sql);
    return $order;
}
function update_bill_status($id, $status) {
    $sql = "UPDATE bill SET trangthai = $status WHERE id = $id";
    return pdo_execute($sql);
}

function loadOne_bill($id) {
    $sql = "SELECT * FROM bill WHERE id = $id";
    $suabill = pdo_query_one($sql);
    return $suabill;
}



?>
