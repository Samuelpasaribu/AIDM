<?php
    class Koneksi{
        private $server = "localhost";
        private $username = "root";
        private $password = "";
        private $db = "mahasiswa";

        function getKoneksi(){
            return new mysqli($this->server, $this->username, $this->password, $this->db);
        }

    }
    
    
?>