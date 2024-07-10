<?php
            
            function insert_taikhoan($user,$password,$email){
                $sql = "insert into taikhoan (user,password,email) values ('$user','$password','$email')";
                pdo_execute($sql);
            }

 function checkuser($user,$password){
      $sql = "select * from taikhoan where user = '".$user."' AND password = '".$password."'";
          $sp = pdo_query_one($sql);
          return $sp;
 }
 function checkemail($email){
    $sql = "SELECT * FROM taikhoan WHERE email = '".$email."'";
    return pdo_query_one($sql);
}

 function update_taikhoan($id,$user,$password,$email,$phone,$diachi) {
    $sql = "UPDATE taikhoan set  user = '".$user."',password = '".$password."',email = '".$email."',phone = '".$phone."',diachi = '".$diachi."'  WHERE id=".$id;
    $updated_user = pdo_query_one($sql);
    var_dump($updated_user);
 }
function loadall_taikhoan(){
    $sql = "SELECT * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
?>