<?php 
    //Lấy giá trị COntroller nào đang làm việc với Client
    $controller = $_GET['controller'] ??'';
    // Điều khiển COntroller làm gì
    $action = $_GET['action'] ?? '';
    // Gọi chức năng cho Client
    switch($controller){
        // case '': 
            
        // require_once('../index.php');
        // break;
        case 'categories' : require_once('Controller/Categories/categories_controller.php'); break;
        case 'product': require_once('Controller/Product/product_controller.php');

    }
?>