<?php 
    class Mahasiswa_model {
        private $dbh; // database handler
        private $stmt;

        public function __construct(){
            // data source name
            $dsn = "mysql:host=localhost;dbname=phpmvc-wpu";
            try {
                 $this->dbh = new PDO($dsn,"root","");
            } catch (PDOException $err) {
                die($err->getMessage());
            }
        }

        public function getAllMahasiswa() : array{
            $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    };
?>