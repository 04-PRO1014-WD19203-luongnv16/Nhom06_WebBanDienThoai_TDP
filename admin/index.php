<?php
include "../model/pdo.pdhp";
include "../model/danhmuc.php";

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
        
            include "danhmuc/add.php";
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
            include "danhmuc/list.php";
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
            include "danhmuc/list.php";
            break;
            
            /*controller sản phẩm */

            case '':
                //kiểm tra xem người dùng có click vào nút add hay không
                
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