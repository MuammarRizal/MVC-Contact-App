<?php 

class About{
    public function index(string $nama = "User",string $pekerjaan="mahasiswa"){
        echo "Hello, Nama saya adalah $nama dan saya seorang $pekerjaan";
    }

    public function page(){
        echo "About/page";
    }
}