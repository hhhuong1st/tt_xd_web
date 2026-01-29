<?php
    class Student{
        // Thuộc tính
        private $id;
        private $name;
        private $birthday;
        // Phương thức
        public function getID(){
            return $this -> id;
        }
        public function getName(){
            return $this -> name;
        }
        public function getBirthday(){
            return $this -> birthday;
        }
        public function __contruct($id, $name, $birthday){
            $this -> id = $id;
            $this -> name = $name;
            $this -> birthday = $birthday;
        }
    }
?>