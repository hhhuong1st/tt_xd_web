<?php
    class SinhVien {
    public $hoten;
    public $tuoi;

    public function __construct($hoten, $tuoi) {
        $this->hoten = $hoten;
        $this->tuoi = $tuoi;
    }
    public function hienThi() {
        echo "Sinh viên: " . $this->hoten . ", tuổi: " . $this->tuoi;
    }
    }

    $sv = new SinhVien("Huỳnh Huyền Hương", 20); 
    $sv->hienThi();

?>