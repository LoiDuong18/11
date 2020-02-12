<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if ($id != null && filter_var($id,FILTER_VALIDATE_INT)) {
            include_once './Models/products.php';
            echo json_encode(Products::getRatingById($id));
        }else{
            header('location: index.php');
        }
    }else{
        header('location: index.php');
    }

?>
