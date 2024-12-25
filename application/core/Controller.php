<?php 
    class Controller{

        public function view($path="Home/index",$data=[]){
            require_once "../application/views/".$path.".php";
        }

        public function model($model){
            require_once "../application/models/".$model.".php";
            return new $model;
        }
    }
?>