<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'home':
                // lay du lieu
                include_once 'model/m_book.php';
                $dsMoi=book_getNew(4);
                $dsGhim=book_getPin(4);
                //hien thi du lieu
                $view_name='page_home';
                break;
            case 'cart':
                //laydulieu
                include_once 'model/m_history.php';
                $MaTK=$_SESSION['user']['MaTK'];
                $GioSach=history_hasCart($MaTK);
                if($GioSach){
                    $ctGioSach=history_getCart($MaTK);
                }else{
                    $ctGioSach=[];
                }
                $view_name='page_cart';
                break;
            case 'history':
                //laydulieu
                include_once 'model/m_history.php';
                $MaTK=$_SESSION['user']['MaTK'];
                $dsLichSu=history_getAllByAccount($MaTK);
                $view_name='page_history';
                break;
            default:
                $view_name='page_home';
                break;
        }
        include_once 'view/v_user_layout.php';
    }else{
        header('location: ?mod=page&act=home');
    }
?>