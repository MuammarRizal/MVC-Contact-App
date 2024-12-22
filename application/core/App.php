<?php 
    class App{
        public $url;
        public function __construct(){
            $this->url = $this->parseURL();
            var_dump($this->url);
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