<?php
    include_once ('controllers/ProductController.php');
    $productController = new ProductController();
    $productController -> List();

    $productController = new ProductController();
    $productController -> detail(1);
?>