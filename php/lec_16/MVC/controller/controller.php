<?php

    class controller{

        public function __construct(){

            if(isset($_SERVER["PATH_INFO"])){
                switch ($_SERVER["PATH_INFO"]) {
                    case '/home':
                        include_once("views/head.php");
                        include_once("views/main.php");
                        include_once("views/footer.php");
                        break;
                    case '/about':
                        include_once("views/subhead.php");
                        include_once("views/about.php");
                        include_once("views/subfooter.php");
                        break;  
                    case '/contact':
                        include_once("views/subhead.php");
                        include_once("views/contact.php");
                        include_once("views/subfooter.php");
                        break;
                    case '/services':
                        include_once("views/subhead.php");
                        include_once("views/services.php");
                        include_once("views/subfooter.php");
                        break;
                    default:
                        break;
                }
            }else{
                header("location:home");
            }
        }
    }

    $controller = new controller;

?>