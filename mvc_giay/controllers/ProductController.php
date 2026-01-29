<?php
    class ProductController {
        public function list(){
            require_once './models/ProductModel.php';
            $productModel = new ProductModel();
            $products = $productModel -> getALLProducts();

            require_once './views/list.php';
        }
        public function detail($id){
            require_once './models/ProductModel.php';
            $productModel = new ProductModel();
            $product = $productModel -> getProductById($id);

            require_once './views/detail.php';
        }
    }
?>