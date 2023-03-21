<?php 
    switch($action){
        case '': 
            require_once('Model/product/product_model.php');
            require_once('View/Admin/product/product.php');
            break;
        case 'create': 
            require_once('Model/product/product_model.php');
            require_once('View/Admin/categories/add_categories.php');
            break;
        case 'store': 
            require_once('Model/product/product_model.php');
            header('location: ?controller=categories');
            break;
        case 'edit': 
            require_once('Model/product/product_model.php');
            require_once('View/Admin/categories/edit_categories.php');
            break;
        case 'update': 
            require_once('Model/product/product_model.php');
            header('location: ?controller=categories');
            break;
        case 'destroy': 
            require_once('Model/product/product_model.php');
            header('location: ?controller=categories');
            break;
    }
?>