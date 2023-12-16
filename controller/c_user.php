<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'login':
                //lay du lieu
                include_once 'model/m_user.php';
                if (isset($_POST['SoDienThoai'])&&isset($_POST['MatKhau'])){
                    $kq=user_login($_POST['SoDienThoai'],$_POST['MatKhau']);
                    if($kq){
                        // dung dang nhap thanh cong
                        $_SESSION['user']=$kq;
                        header('location: '.$base_url.'page/home');
                    }else{
                        $_SESSION['loi']= 'Số điện thoại hoặc mật khẩu không đúng!';
                    }
                }
                // hien thi du lieu
                $view_name='user_login';
                break;
            case 'logout':
                unset($_SESSION['user']);
                header('location: '.$base_url.'page/home');
            default:
                $view_name='page_home';
                break;
        }
        include_once 'view/v_user_layout.php';
    }else{
        header('location: ?mod=book&act=detail');
    }
?>