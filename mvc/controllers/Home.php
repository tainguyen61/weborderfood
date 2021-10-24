<?php 
    class Home extends Controller{
        function SayHi(){
            $user = $this->model("ProductsModel");
            echo $user->getProduct();
        }
    
        function Show(){
            //Model
            $product = $this->model("ProductsModel");
            //View
            $this->view("layout",[
                "pages"=>"Product",
                "data"=>$product->Product()
            ]);
        
        }
    }
?>