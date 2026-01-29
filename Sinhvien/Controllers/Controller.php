<?php
include_once("Models/StudentModel.php")
    class Controller{
        public function __construct(){
            $this -> modelStudent = new StudentModel();
        }
        public function invoke(){
            if (!insset($_GET['id'])){
                $students = $this -> modelStudent -> getStudentList();
                require_once 'Views/Student_list.php'

            }else{
                $students = $this -> modelStudent -> getStudent();
                require_once 'Views/Student_list.php'
            }
        }
    }
?>