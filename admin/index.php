<?php
include "../model/pdo.php";

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
        case '':
               
        case '':
            
            break;
        case '':
            
            
            include "danhmuc/update.php";
            break;
        case '':
           
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