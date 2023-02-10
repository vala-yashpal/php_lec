<?php

    require_once("model/model.php");

    class controller extends model{
        public $base_url = "";
        public function __construct(){
            parent::__construct();

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
                        include_once("views/login.php");
                        
                        echo "<pre>";
                        if(isset($_POST['submit'])){
                            print_r($_POST);
                            // array_pop($_POST);
                            // exit;
                            $first_name=$_POST['first_name'];
                            $last_name=$_POST['last_name'];
                            $email=$_POST['email'];
                            $f_password=$_POST['f_password'];
                            $l_password=$_POST['l_password'];
                            $age=$_POST['age'];
                            $Dob=$_POST['Dob'];
                            $city=$_POST['city'];
                            $gender=$_POST['gender'];
                            $language=json_encode($_POST['language']);
                            
                            $key_value =['first_name'=> $first_name,'last_name'=> $last_name,'email'=> $email,'f_password'=> $f_password,'l_password'=> $l_password,'age'=> $age,'Dob'=> $Dob,'city'=> $city,'gender'=>$gender,'language'=> $language];

                            $result = $this->insert('user_det',$key_value);

                            print_r($result);
                        }
                        echo "</pre>";
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

<!-- $first_name=$_POST['first_name'];
                            $language=json_encode($_POST['language']);
                            
                            $key_value=['first_name'=>$first_name,'language'=>$language]; -->
