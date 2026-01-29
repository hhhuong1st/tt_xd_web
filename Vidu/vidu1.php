<?php
    class SinhVien {
        public function chao($ten){
            echo "Xin chào " . $ten;
        }
    }
    $sv = new SinhVien();
    $sv -> chao("Hương");
?>