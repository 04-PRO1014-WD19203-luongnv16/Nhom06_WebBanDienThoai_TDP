<?php
function insert_cart($iduser, $img, $name, $price, $soluong, $thanhtien, $idbill) {
    $sql = "INSERT INTO cart(iduser,img,name,price,soluong, thanhtien,idbill) values('$iduser','$img','$name','$price',$soluong,'$thanhtien','$idbill')";
  pdo_execute($sql);
}

function load_cart_by_user($iduser) {
    $sql = "SELECT * FROM cart WHERE iduser = $iduser AND idbill = 0"; 
    return pdo_query($sql);
}

function load_cart_total($iduser) {
    $sql = "SELECT SUM(thanhtien) AS total FROM cart WHERE iduser = $iduser AND idbill = 0";
    return pdo_query_one($sql);
}



function delete_cart($id) {
    $sql = "DELETE FROM cart WHERE id = $id";
    return pdo_execute($sql);
}

function update_cart_quantity($id, $soluong, $thanhtien) {
    $sql = "UPDATE cart SET soluong = :soluong, thanhtien = :thanhtien WHERE id = :id";
    pdo_execute($sql, [
        'soluong' => $soluong,
        'thanhtien' => $thanhtien,
        'id' => $id
    ]);
}
?>
