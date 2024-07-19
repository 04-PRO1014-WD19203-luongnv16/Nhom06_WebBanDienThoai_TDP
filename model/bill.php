<?php

function insert_bill($iduser, $hoten, $diachi, $sdt, $email, $pttt, $ngaydathang, $total ,$trangthai) {
    $sql = "INSERT INTO bill(iduser, hoten, diachi, sdt, email, pttt, ngaydathang, total,trangthai) 
            VALUES ('$iduser', '$hoten', '$diachi', '$sdt', '$email', '$pttt', '$ngaydathang', '$total',$trangthai)";
    pdo_execute($sql);
}



function load_bill_by_user($iduser) {
    $sql = "SELECT * FROM bill WHERE iduser = $iduser ORDER BY ngaydanghang DESC";
    return pdo_query($sql);
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
