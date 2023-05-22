<?php
    class controller{
        public $base_url = "";
        public function __construct(){

            // echo "<pre>";
            // print_r($_SERVER);

            $RequestUriData = explode("/",$_SERVER['REQUEST_URI']);
            $this->base_url .= $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".$RequestUriData[1]."/".$RequestUriData[2]."/".$RequestUriData[3]."/assets";
            
            // echo "<br>static  base url :http://localhost/php_lec_tops/Assessment/fruit_project/assets<br>";
            // echo "dynamic base url :". $this->base_url;
            // echo "</pre>";

            if(isset($_SERVER['PATH_INFO'])){
                switch ($_SERVER['PATH_INFO']) {

                    case '/home':
                        include_once("views/headerr.php");
                        include_once("views/home.php");
                        include_once("views/footer.php");
                    break;

                    case '/shop':
                        include_once("views/headerr.php");
                        include_once("views/shop.php");
                        include_once("views/footer.php");
                    break;

                    case '/wishlist':
                        include_once("views/headerr.php");
                        include_once("views/wishlist.php");
                        include_once("views/footer.php");
                    break;
                    
                    case '/single_product':
                        include_once("views/headerr.php");
                        include_once("views/single_product.php");
                        include_once("views/footer.php");
                    break;

                    case '/about':
                        include_once("views/headerr.php");
                        include_once("views/about.php");
                        include_once("views/footer.php");
                    break;

                    case '/blog':
                        include_once("views/headerr.php");
                        include_once("views/blog.php");
                        include_once("views/footer.php");
                    break;

                    case '/blog_single':
                        include_once("views/headerr.php");
                        include_once("views/blog_single.php");
                        include_once("views/footer.php");
                    break;

                    case '/contact':
                        include_once("views/headerr.php");
                        include_once("views/contact.php");
                        include_once("views/footer.php");
                    break;

                    case '/cart':
                        include_once("views/headerr.php");
                        include_once("views/cart.php");
                        include_once("views/footer.php");
                    break;

                    case '/checkout':
                        include_once("views/headerr.php");
                        include_once("views/checkout.php");
                        include_once("views/footer.php");
                    break;

                    case '/register':
                        include_once("views/headerr.php");
                        include_once("views/register.php");
                        include_once("views/footer.php");
                    break;

                    default:
                        header("location:home");
                    break;
                }
            }else{
                header("location:home");
            } 
        }
    }

    $controller = new controller;

?>