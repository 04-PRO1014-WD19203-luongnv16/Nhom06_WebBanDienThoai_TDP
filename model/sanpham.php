<?php
function insert_sanpham($name,$mota,$img,$import_price,$sale_price,$listed_price,$stock,$iddm){
  $sql = "INSERT INTO sanpham(name,mota,img,import_price,sale_price,listed_price,stock,iddm) values('$name','$mota','$img','$import_price','$sale_price','$listed_price',$stock,'$iddm')";
  pdo_execute($sql);
}
  function loadAll_sanpham(){
    $sql = "SELECT sanpham.*, danhmuc.name FROM sanpham inner join danhmuc on sanpham.iddm = danhmuc.id order by sanpham.id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
  }
  function delete_sanpham($id){
    $sql = "DELETE FROM sanpham WHERE id=".$id;
    pdo_execute($sql);
  }
  function loadOne_sanpham($id){
    $sql = "SELECT * FROM sanpham WHERE id=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
  }
  function update_sanpham($id,$name,$mota,$img,$import_price,$sale_price,$listed_price,$stock,$iddm){
    if($img!=""){
      $sql = "UPDATE sanpham SET name='$name',mota='$mota',img='$img',import_price='$import_price',sale_price='$sale_price',listed_price='$listed_price',stock='$stock',iddm='$iddm' WHERE id=".$id;
    }else{
      $sql = "UPDATE sanpham SET name='$name',mota='$mota',import_price='$import_price',sale_price='$sale_price',listed_price='$listed_price',stock='$stock',iddm='$iddm' WHERE id=".$id;
    }
    pdo_execute($sql);
  }
?> 