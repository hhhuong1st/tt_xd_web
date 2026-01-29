<?php
    class TinhToan {
        public function Tong($a, $b){
            return $a + $b;
        }
    }
    $tt = new TinhToan();
    $kq = $tt -> Tong(6,3);
    echo $kq;
?>