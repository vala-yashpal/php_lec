<?php
    session_start();
    require_once("model/model.php");
    class controller extends model{
        public $base_url = "";
        public function __construct(){
            ob_start();
            parent::__construct();

            $reqURIdata = explode("/",$_SERVER['REQUEST_URI']);  // array cut
            $this->base_url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".$reqURIdata[1]."/".$reqURIdata[2]."/".$reqURIdata[3]."/".$reqURIdata[4]."/assets/";
            
            // echo "<pre>";
            // print_r($_SERVER);
            // echo "</pre>";
            // exit;

            if(isset($_SERVER["PATH_INFO"])){

                switch ($_SERVER["PATH_INFO"]){

                    case '/home':
                        echo "<h2>welcome to our api success</h2>";
                        break;
                    
                        case '/select':
                            $result = $this->select('register');
                            echo json_encode($result);
                            // echo "<pre>";
                            // print_r($result);
                            break;
                            
                        case '/alltododata':
                            $Result = $this->select('todo');
                            echo json_encode($Result);
                            // echo "<pre>";
                            // print_r($Result);
                            break;

                        case '/inserttodo':

                            $data = json_decode(file_get_contents('php://input') );

                            $array = (array) $data;

                            $insetrtodo = $this->insert("todo",$array);

                            echo json_encode($insetrtodo);

                            // echo "<pre>";
                            // print_r($Result);
                            break;

                        case '/updatetodo':

                            $data = json_decode(file_get_contents('php://input') );
                            $id=$_REQUEST;

                            $array = (array) $data;

                            $updatetodo = $this->update("todo",$array,$id);

                            echo json_encode($updatetodo);

                            // echo "<pre>";
                            // print_r($Result);
                            break;

                            case '/delettodo':
                                $id=$_REQUEST;
                                
                                $deletetodo = $this->delete("todo",$id);
                               
                                echo json_encode($deletetodo);
    
                                // echo "<pre>";
                                // print_r($Result);
                                break;

                        case '/getdatabyid':
                            $Result = $this->select('todo',array("id"=>$_REQUEST['id']));
                            echo json_encode($Result);
                            // echo "<pre>";
                            // print_r($Result);
                            break;
    

                    case '/login':
                        include_once("views/login.php");
                        if(isset($_POST['login'])){
                        
                            $result = $this->login($_POST['user_n_m_e'],$_POST['password']);

                            if($result['Code'] == 1){
                                
                                $_SESSION['userdata'] = $result['Data'][0];

                                // echo "<pre>";
                                // print_r($_SESSION['userdata']);
                                
                                if($result['Data'][0]->id == 1){
                                    header("location:admindashboard");
                                }else{
                                    header("location:home");
                                }
                            }else{
                                echo '<script>alert("Invalid User")</script>';
                            }
                        }
                        include_once("views/footer.php");
                    break;

                    
                    default:
                        include_once("views/headerr.php");
                        include_once("views/404.php");
                        include_once("views/footer.php");
                        break;
                }
            }else{
                header("location:home");
            }
            ob_flush(); 
        }
    }   
    $controller = new controller;
?>

