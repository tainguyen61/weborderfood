<?php 
    class Home extends Controller{
        function SayHi(){
            $user = $this->model("ProductsModel");
            echo $user->getProduct();
        }
    
        function Show(){
            //Model
            // $product = $this->model("ProductsModel");
            // $pd = $product->Product();
            // $array = [];
            // while($row = mysqli_fetch_array($pd)){
            //     array_push($array,new Product(
            //         $row['mamon'],
            //         $row['tenmon'],
            //         $row['gia'],
            //         $row['danhgia'],
            //         $row['maloai'],
            //         $row['hinhanh']
            //     ));
            // }
            // echo json_encode($array);
            //View
            $this->view("layout");
        
        }
    }
    class Product{
        function Product($mamon,$tenmon,$gia,$danhgia,$maloai,$hinhanh){
            $this->mamon = $mamon;
            $this->tenmon = $tenmon;
            $this->gia = $gia;
            $this->danhgia = $danhgia;
            $this->maloai = $maloai;
            $this->hinhanh = $hinhanh;
        }
    }
?>