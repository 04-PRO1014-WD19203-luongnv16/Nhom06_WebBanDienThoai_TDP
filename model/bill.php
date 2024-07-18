<?php
function insert_bill($iduser, $hoten, $diachi, $sdt, $email, $pttt, $ngaydanghang, $total) {
    $sql = "INSERT INTO bill(iduser, hoten, diachi, sdt, email, pttt, ngaydanghang, total) 
            VALUES ('$iduser', '$hoten', '$diachi', '$sdt', '$email', '$pttt', '$ngaydanghang', '$total')";
    return pdo_execute($sql);
}


function update_bill_status($id, $status) {
    $sql = "UPDATE bill SET trangthai = $status WHERE id = $id";
    return pdo_execute($sql);
}

function load_bill_by_user($iduser) {
    $sql = "SELECT * FROM bill WHERE iduser = $iduser ORDER BY ngaydanghang DESC";
    return pdo_query($sql);
}

function load_bill_by_id($id) {
    $sql = "SELECT * FROM bill WHERE id = $id";
    return pdo_query_one($sql);
}

?>
