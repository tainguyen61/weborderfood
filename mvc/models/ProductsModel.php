<?php
    class ProductsModel extends Database{
        public function getProduct(){
            //Connect db
            return "Nguyen Van A";
        }

        public function Product(){
            $query = "SELECT * FROM MON";
            return mysqli_query($this->conn,$query);
        }
    }
?>