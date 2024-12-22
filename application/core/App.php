<?php 
    class App{
        protected $url;
        protected $controller = "Home";
        protected $method = "index";
        protected $params = [];
        public function __construct(){
            $this->url = $this->parseURL();

            // mengecek class apakah ada atau tidak
            if(isset($this->url[0])){
                if(file_exists("../application/controllers/".ucwords($this->url[0]).".php")){
                    $this->controller = ucwords($this->url[0]);
                    unset($this->url[0]);
                }
            }
            

            require_once "../application/controllers/".$this->controller.".php";
            $this->controller = new $this->controller;

            // mengecek method ada atau tidak
            if(isset($this->url[0])){
                if(isset($this->url[1])){
                    if(method_exists($this->controller, $this->url[1])){
                        $this->method = $url[1];
                        echo $this->method;
                        unset($this->url[1]);
                    }
                }
            }
            

            // params
            if(!empty($this->url)){
                $params = array_values($this->url);
            }

            // jalankan controller & method, serta kirimkan params jika ada
            call_user_func_array([$this->controller,$this->method],$this->params);
        }

        public function parseURL(){
            if(isset($_GET)){
                $url = rtrim($_GET["url"]); # Untuk membersihkan tanda slash (/) diakhir
                $url = filter_var($url, FILTER_SANITIZE_URL); # untuk membersihkan url jahat dari hacker
                $url = explode("/", $url); # untuk memecahkan beberapa kata ke dalam array
                return $url;
            }
        }
    }
?>