<?php
function insert_taikhoan($username, $password,$email,$tel){
    if (empty($username) || empty($password) || empty($email) || empty($tel)) {
        return false; 
    }
    $sql = "INSERT INTO taikhoan (username, password, email,tel) VALUES ('$username', '$password', '$email','$tel')";
    pdo_execute($sql);
}

function checkuser($username, $password){
    $sql = "SELECT * FROM taikhoan WHERE username = '".$username."' AND password = '".$password."'";
    return pdo_query_one($sql);
}

function checkemail($email){
    $sql = "SELECT * FROM taikhoan WHERE email = '".$email."'";
    return pdo_query_one($sql);
}

function update_taikhoan($id, $username, $password, $email, $phone, $diachi) {
    $sql = "UPDATE taikhoan SET username = '".$username."', password = '".$password."', email = '".$email."', phone = '".$phone."', diachi = '".$diachi."' WHERE id = ".$id;
    return pdo_query_one($sql);
}

function loadall_taikhoan(){
    $sql = "SELECT * FROM taikhoan ORDER BY id DESC";
    return pdo_query($sql);
}
?>
