<?php
include "../model/pdo.pdhp";
include "../model/danhmuc.php";
include "../model/sanpham.php";

//controler

if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
        case 'adddm':
            //kiểm tra xem người dùng có click vào nút add hay không
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao="Thêm thành công";
            }
        
            include "danhmuc/add_danhmuc.php";
            break;
        case 'listdm':
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list_danhmuc.php";
            break;
               
        case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
                echo "<script>";
                echo "alert('bạn có muỗn xóa không')";
                echo "</script>";

            }
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list_danhmuc.php";
            break;
            
        case 'suadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $dm=loadone_danhmuc($_GET['id']);
            }
            
            include "danhmuc/update_danhmuc.php";
            break;
        case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tenloai=$_POST['tenloai'];
                $id=$_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao="Cập nhật thành công";
            }
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list_danhmuc.php";
            break;
            
            /*controller sản phẩm */

            case 'addsp':
                //kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                     
                    } else{

                    }
                    insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao="Thêm thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/add_sanpham.php";
                
                break;
            case 'listsp':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($kyw,$iddm);
                include "sanpham/list_sanpham.php";
                    
                    break;
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                // tại đaay
                $listsanpham=loadall_sanpham("", 0);
                include "sanpham/list_sanpham.php";
                break;
               
            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/update_sanpham.php";
                break;
            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                     
                    } else{

                    }
                    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham("", 0);
                include "sanpham/list_sanpham.php";
               
                break; 
            case '':  
                
                break; 
            case '':  
               
                break;
            case '':
                
                break; 
                case '':
                
                break; 
                case '':
                    
                    break;  
                case '':
                    
                    break;
                case '':
                    
                    break;
                
                                
            default:
                include "home.php";
                break;
    }
}else{
    include "home.php";
}


include "footer.php";
?>