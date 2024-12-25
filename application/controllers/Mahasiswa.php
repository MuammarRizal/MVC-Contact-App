<?php 
    class Mahasiswa extends Controller{
        public function index(){
            $data["judul"] = "Halaman Mahasiswa";
            $data["nama"] = "Muammar Rizal";
            $data["mahasiswa"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
            $this->view("templates/header",$data);
            $this->view("mahasiswa/index",$data);
            $this->view("templates/footer");
        }
    }
?>