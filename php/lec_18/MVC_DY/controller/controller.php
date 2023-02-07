<?php
    class controller{

        public $base_url = "";

        public function __construct(){

            $reqURIdata = explode("/",$_SERVER['REQUEST_URI']);  // array cut

            $this->base_url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".$reqURIdata[1]."/".$reqURIdata[2]."/".$reqURIdata[3]."/".$reqURIdata[4]."/assets/";

            if(isset($_SERVER["PATH_INFO"])){

                switch ($_SERVER["PATH_INFO"]){
                    case '/home':
                        include_once("views/headerr.php");
                        include_once("views/main.php");
                        include_once("views/footer.php");
                        break;

                    case '/about':
                        include_once("views/headerr.php");
                        include_once("views/about.php");
                        include_once("views/footer.php");
                        break;

                    case '/courses':
                        include_once("views/headerr.php");
                        include_once("views/courses.php");
                        include_once("views/footer.php");
                        break;
                        
                    case '/contact':
                        include_once("views/headerr.php");
                        include_once("views/contact.php");
                        include_once("views/footer.php");
                        break;

                    case '/feature':
                        include_once("views/headerr.php");
                        include_once("views/features.php");
                        include_once("views/footer.php");
                        break;

                    case '/appointment':
                        include_once("views/headerr.php");
                        include_once("views/appointment.php");
                        include_once("views/footer.php");
                        break;

                    case '/team':
                        include_once("views/headerr.php");
                        include_once("views/team.php");
                        include_once("views/footer.php");
                        break;

                    case '/testimonial':
                        include_once("views/headerr.php");
                        include_once("views/testimonial.php");
                        include_once("views/footer.php");
                        break;

                    case '/404':
                        include_once("views/headerr.php");
                        include_once("views/404.php");
                        include_once("views/footer.php");
                        break;

                    case '/login':
                        include_once("views/login_regist.php");
                        echo "<pre>";
                        if(isset($_POST['register'])){
                            print_r($_POST);
                        }
                        echo "<pre>";
                        
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