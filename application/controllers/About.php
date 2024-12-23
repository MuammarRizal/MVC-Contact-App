<?php 
    class About extends Controller{

        public function index($nama="Muammar Rizal",$pekerjaan="Mahasiswa",$umur=22){
            $data["judul"] = "About";
            $data["nama"] = $nama;
            $data["pekerjaan"] = $pekerjaan;
            $data["umur"] = $umur;

            $this->view("templates/header",$data);
            $this->view("about/index",$data);
            $this->view("templates/footer");
        }

        public function page(){
            $data["judul"] = "About Pages";
            $this->view("templates/header",$data);
            $this->view('about/page',$data);
            $this->view("templates/footer");
        }
    }
?>