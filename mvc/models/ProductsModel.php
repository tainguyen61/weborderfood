<?php
    class ProductsModel extends Database{
        public function getProduct(){
            //Connect db
            return "Nguyen Van A";
        }

        public function Product(){
            $query = "SELECT * FROM MON";
            $row = mysqli_query($this->conn,$query);
            $array =array();
            while($data = mysqli_fetch_array($row)){
                $array[] = $data;
            }
            // $array["key"]=1;
            return json_encode($array);
        }
    }
?>