<?php
    class Application{

        protected $controller = "Home";
        protected $action = "SayHi";
        protected $params = [];

        function __construct(){
            $array = $this->UrlProcess();
            //Controller
            // if( file_exists("./mvc/controllers/".$array[0].".php") ){
                if( file_exists("./mvc/Controller/".$array[0].".php") ){ 
                $this->controller = $array[0];
                unset($array[0]);
            }
            require_once "./mvc/controllers/".$this->controller.".php";
            // require_once "./mvc/Controller/".$this->controller.".php";
            $this->controller = new $this->controller;
            //Action
            if(isset($array[1])){
                if(method_exists($this->controller, $array[1])){
                    $this->action = $array[1];
                }
                unset($array[1]);
            }
            
            //Params
            $this->params = $array?array_values($array):[];
            
            call_user_func_array([$this->controller, $this->action], $this->params);
        }
        function UrlProcess(){
            if( isset($_GET["url"]) ){
                return explode("/", filter_var(trim($_GET["url"], "/")));
            }
        }    
    }
?>