<?php 
    class Controller{

        public function view($path="Home/index",$data=[]){
            require_once "../application/views/".$path.".php";
        }
    }
?>