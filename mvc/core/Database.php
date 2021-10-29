<?php
    class Database{
        public $conn;
        protected $server = "localhost";
        protected $user = "root";
        protected $pass = "";
        protected $database = "orderfood";
        function __construct()
        {
            $this->conn = mysqli_connect($this->server,$this->user,$this->pass);
            mysqli_select_db($this->conn,$this->database);
            mysqli_query($this->conn,"SET NAMES 'urf8'");
        }
    }
?>