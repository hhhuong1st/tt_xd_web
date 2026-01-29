<?php
    class ProductModel {
        public function getAllProducts(){
            return [
                ['id' => 1, 'name' => 'Giày chạy bộ', 'price' => 500000],
                ['id' => 2, 'name' => 'Giày bóng đá', 'price' => 700000]
            ];
        }
        public function getProductById($id){
            $products = $this -> getAllProducts();
            foreach ($products as $product) {
                if ($product['id'] == $id) {
                    return $product;
                }
            }
            return null;
        }
    }
?>