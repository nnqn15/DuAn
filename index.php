<?php 
    include_once 'config.php';
    include_once 'model/m_book.php';
    $dsDocNhieu=book_getMostViewed(10);
    include_once 'model/m_category.php';
    $dsChuDe=category_getAll();
    if(isset($_GET['mod'])){
        switch($_GET['mod']){
            case 'page':
                $ctrl_name='page';
                break;
            case 'user':
                $ctrl_name='user';
                break;
            case 'book':
                $ctrl_name='book';
                break;
            case 'category':
                $ctrl_name='category';
                break;
            case 'admin':
                $ctrl_name='admin';
                break;
            default:
            $ctrl_name='page';
                break;
        }
        include_once 'controller/c_'.$ctrl_name.'.php';
    }else{
        header('location: page/home');
    }
?>