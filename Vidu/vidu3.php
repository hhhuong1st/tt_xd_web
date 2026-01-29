<?php
    class SinhVien{
        public $Ten;
        public function setten($Ten){
            $this -> Ten = $Ten;
        }
        public function getten(){
            echo $this -> Ten;
        }
    }
    $sv = new SinhVien();
    $sv->setten("Huỳnh Huyền Hương");
    $sv-> getten();
?>